<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Exception;

class AdminController extends Controller
{
    function index()
    {
        if (Auth::user()->level == 'super-admin') {
            $data['title'] = 'Data Administrator';
            $data['administrators'] = Admin::all();

            return view('admin.administrator.index', $data);
        }

        return abort('404');
    }

    function json()
    {
        return DataTables::of(Admin::orderBy('id', 'desc')->get())
            ->addIndexColumn()
            ->addColumn('action', function (Admin $admin) {
                $btn = '<button data-id="' . $admin->id . '" class="dropdown-item edit" href="javascript:void(0)">Sunting</button>';
                $btn .= '<button data-id="' . $admin->id . '" class="dropdown-item text-danger delete" href="javascript:void(0)">Hapus</button>';
                return '<span class="dropdown">
                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Aksi</button>
                            <div class="dropdown-menu">' .
                    $btn
                    . '</div>
                        </span>';
            })
            ->addColumn('email', function (Admin $admin) {
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
                'phone_number' => ($request->id) ? 'required|digits_between:9,12' : 'required|digits_between:9,12|unique:admins',
                'username' => ($request->id) ? 'required' : 'required|unique:admins',
                'level' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'message' => 'Periksa formulir kembali.',
                    'data' => $validator->errors(),
                ]);
            }

            $photo = $request->hidden_photo;

            if ($request->file('photo')) {
                $path = 'public/admin-photos/';
                $file = $request->file('photo');
                $file_name = Str::random(5) . time() . '_' . $file->getClientOriginalName();

                $file->storeAs($path, $file_name);
                $photo = "storage/admin-photos/" . $file_name;
            }

            $data = Admin::updateOrCreate([
                'id' => $request->id
            ], [
                'photo' => $photo,
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'username' => $request->username,
                'level' => $request->level,
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
            $data = Admin::findOrFail($request->id);

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
            $data = Admin::findOrFail($request->id);
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
