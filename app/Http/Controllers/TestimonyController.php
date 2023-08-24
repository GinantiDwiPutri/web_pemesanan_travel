<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class TestimonyController extends Controller
{
    function index()
    {
        if (Auth::user()->level == 'super-admin') {
            $data['title'] = 'Data Testimoni';
            $data['administrators'] = Testimony::all();

            return view('admin.testimony.index', $data);
        }

        return abort('404');
    }

    function json()
    {
        return DataTables::of(Testimony::orderBy('id', 'desc')->get())
            ->addIndexColumn()
            ->addColumn('action', function (Testimony $admin) {
                $btn = '<button data-id="' . $admin->id . '" class="dropdown-item edit" href="javascript:void(0)">Sunting</button>';
                $btn .= '<button data-id="' . $admin->id . '" class="dropdown-item text-danger delete" href="javascript:void(0)">Hapus</button>';
                return '<span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Aksi</button>
                            <div class="dropdown-menu">' .
                    $btn
                    . '</div>
                        </span>';
            })
            ->addColumn('email', function (Testimony $admin) {
                return empty($admin->email) ? '-' : $admin->email;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'body' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'message' => 'Periksa formulir kembali.',
                    'data' => $validator->errors(),
                ]);
            }

            $data = Testimony::updateOrCreate([
                'id' => $request->id
            ], [
                'name' => $request->name,
                'body' => $request->body,
            ]);

            if (empty($request->id)) {
                return response()->json([
                    'status' => 201,
                    'message' => 'Data telah ditambahkan.',
                    'data' => $data,
                ]);
            } else {
                return response()->json([
                    'status' => 201,
                    'message' => 'Data telah diperbaharui.',
                    'data' => $data,
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Masalah tidak dikenali.',
                'data' => $e->getMessage(),
            ]);
        }
    }

    function check(Request $request)
    {
        try {
            $data = Testimony::findOrFail($request->id);

            return response()->json([
                'status' => 201,
                'message' => 'Data telah ditemukan.',
                'data' => $data,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Masalah tidak dikenali.',
                'data' => $e->getMessage(),
            ]);
        }
    }

    function destroy(Request $request)
    {
        try {
            $data = Testimony::findOrFail($request->id);
            $data->delete();

            return response()->json([
                'status' => 201,
                'message' => 'Data telah dihapus.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Masalah tidak dikenali.',
                'data' => $e->getMessage(),
            ]);
        }
    }
}
