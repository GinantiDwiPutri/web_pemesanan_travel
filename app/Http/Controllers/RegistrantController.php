<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class RegistrantController extends Controller
{
    public function __construct()
    {
        $this->firestore = app('firebase.firestore')->database();
    }

    function index()
    {
        $data['title'] = 'Data Calon Driver';

        return view('admin.registrant.index', $data);
    }

    function table()
    {
        $data['registrants'] = $this->firestore->collection('drivers')->where('status', '=', 'registrant')->documents();
        return view('admin.registrant.table', $data);
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

                $this->firestore->collection('drivers')->document($request->id)->set($data, ['merge' => true]);

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
        $data['title'] = 'Detail Calon Driver';
        $data['driver'] = $this->firestore->collection('drivers')->document(Crypt::decrypt($request->id))->snapshot();

        return view('admin.registrant.detail', $data);
    }

    function check(Request $request)
    {
        try {
            $data = $this->firestore->collection('drivers')->document($request->id)->snapshot();

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

    function accept(Request $request)
    {
        try {
            $data = [
                'status' => 'active',
            ];

            $this->firestore->collection('drivers')->document($request->id)->set($data, ['merge' => true]);

            return response()->json([
                'status' => 201,
                'message' => 'Driver telah diterima',
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
            $this->firestore->collection('drivers')->document($request->id)->delete();

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
