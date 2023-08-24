<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HelpController extends Controller
{
    public function __construct()
    {
        $this->firestore = app('firebase.firestore')->database();
    }

    function index()
    {
        $data['title'] = 'Data Bantuan';

        return view('admin.help.index', $data);
    }

    function table()
    {
        $data['helps'] = $this->firestore->collection('helps')->documents();
        return view('admin.help.table', $data);
    }

    function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'on' => 'required',
                'content' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'message' => 'Periksa formulir kembali.',
                    'data' => $validator->errors(),
                ]);
            }

            $data = [
                'title' => $request->title,
                'on' => $request->on,
                'content' => $request->content,
            ];


            if (empty($request->id)) {
                $this->firestore->collection('helps')->newDocument()->set($data, ['merge' => true]);

                return response()->json([
                    'status' => 201,
                    'message' => 'Data telah ditambahkan.',
                ]);
            } else {
                $this->firestore->collection('helps')->document($request->id)->set($data, ['merge' => true]);

                return response()->json([
                    'status' => 201,
                    'message' => 'Data telah diperbaharui.',
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
            $data = $this->firestore->collection('helps')->document($request->id)->snapshot();

            return response()->json([
                'status' => 201,
                'message' => 'Data telah ditemukan.',
                'data' => $data->data(),
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
            $this->firestore->collection('helps')->document($request->id)->delete();

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
