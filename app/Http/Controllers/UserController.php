<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function __construct()
    {
        $this->firestore = app('firebase.firestore')->database();
    }

    function index()
    {
        $data['title'] = 'Data Pengguna';

        return view('admin.user.index', $data);
    }

    function table()
    {
        $data['users'] = $this->firestore->collection('users')->documents();
        return view('admin.user.table', $data);
    }

    function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'display_name' => 'required',
                'phone_number' => 'required',
                'email' => 'required|email',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'message' => 'Periksa formulir kembali.',
                    'data' => $validator->errors(),
                ]);
            }

            if (!empty($request->id)) {
                $data = [
                    'displayName' => $request->display_name,
                    'email' => $request->email,
                ];

                $this->firestore->collection('users')->document($request->id)->set($data, ['merge' => true]);

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

    function detail(Request $request)
    {
        $data['title'] = 'Detail Pengguna';
        $data['user'] = $this->firestore->collection('users')->document(Crypt::decrypt($request->id))->snapshot();

        return view('admin.user.detail', $data);
    }

    function check(Request $request)
    {
        try {
            $data = $this->firestore->collection('users')->document($request->id)->snapshot();

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

    function block(Request $request)
    {
        try {
            $data = [
                'status' => 'blocked',
            ];

            $this->firestore->collection('users')->document($request->id)->set($data, ['merge' => true]);

            return response()->json([
                'status' => 201,
                'message' => 'Pengguna telah diblokir',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Masalah tidak dikenali.',
                'data' => $e->getMessage(),
            ]);
        }
    }

    function cancelBlock(Request $request)
    {
        try {
            $data = [
                'status' => 'active',
            ];

            $this->firestore->collection('users')->document($request->id)->set($data, ['merge' => true]);

            return response()->json([
                'status' => 201,
                'message' => 'Blokir telah dibatalkan',
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
            $this->firestore->collection('users')->document($request->id)->delete();

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
