<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TripController extends Controller
{
    public function __construct()
    {
        $this->firestore = app('firebase.firestore')->database();
    }

    function index()
    {
        $data['title'] = 'Data Keberangkatan';
        $data['routes'] = $this->firestore->collection('routes')->documents();
        $data['drivers'] = $this->firestore->collection('drivers')->documents();

        return view('admin.trip.index', $data);
    }

    function table()
    {
        $data['trips'] = $this->firestore->collection('trips')->documents();

        return view('admin.trip.table', $data);
    }

    function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'date' => 'required',
                'time' => 'required',
                'route' => 'required',
                'driver' => 'required',
                'price' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'message' => 'Periksa formulir kembali.',
                    'data' => $validator->errors(),
                ]);
            }

            $data = [
                'date' => $request->date,
                'time' => $request->time,
                'route' => $request->route,
                'price' => $request->price,
                'driverPhoneNumber' => $request->driver,
                'A1' => "",
                'A2' => "",
                'A3' => "",
                'A4' => "",
                'status' => "Menunggu",
            ];


            if (empty($request->id)) {
                $this->firestore->collection('trips')->newDocument()->set($data, ['merge' => true]);

                return response()->json([
                    'status' => 201,
                    'message' => 'Data telah ditambahkan.',
                ]);
            } else {
                $this->firestore->collection('trips')->document($request->id)->set($data, ['merge' => true]);

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
            $data = $this->firestore->collection('trips')->document($request->id)->snapshot();

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
            $this->firestore->collection('trips')->document($request->id)->delete();

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
