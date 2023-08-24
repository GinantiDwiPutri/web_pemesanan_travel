<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->firestore = app('firebase.firestore')->database();
    }

    function index()
    {
        $data['title'] = 'Data Pesanan';
        $data['routes'] = $this->firestore->collection('routes')->documents();
        $data['drivers'] = $this->firestore->collection('drivers')->documents();

        return view('admin.order.index', $data);
    }

    function table()
    {
        $data['orders'] = $this->firestore->collection('orders')->documents();

        return view('admin.order.table', $data);
    }

    function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'route' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'message' => 'Periksa formulir kembali.',
                    'data' => $validator->errors(),
                ]);
            }

            $data = [
                'route' => $request->route,
            ];


            if (empty($request->id)) {
                $this->firestore->collection('routes')->newDocument()->set($data, ['merge' => true]);

                return response()->json([
                    'status' => 201,
                    'message' => 'Data telah ditambahkan.',
                ]);
            } else {
                $this->firestore->collection('routes')->document($request->id)->set($data, ['merge' => true]);

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
            $data = $this->firestore->collection('routes')->document($request->id)->snapshot();

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
            $this->firestore->collection('orders')->document($request->id)->delete();

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
