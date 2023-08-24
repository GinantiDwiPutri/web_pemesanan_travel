<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;


class PaymentController extends Controller
{
    public function __construct()
    {
        $this->firestore = app('firebase.firestore')->database();
    }

    function payment(Request $request)
    {
        if ($request->price) {
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            \Midtrans\Config::$isProduction = false;
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => 'Berangkut' . '-' . Str::random(5),
                    'gross_amount' => $request->price,
                ),
                'customer_details' => array(
                    'name' => $request->displayName,
                    'email' => $request->email,
                    'phone' => $request->clientPhoneNumber,
                ),
            );

            $data['snapToken'] = \Midtrans\Snap::getSnapToken($params);

            return view('payment', $data);
        }

        return abort(404);
    }

    function addOrder(Request $request)
    {
        try {
            $data = [
                'tripID' => $request->trip_id,
                'clientPhoneNumber' => str_contains($request->client_phone_number, '+') ? $request->client_phone_number : '+' . $request->client_phone_number,
                'driverPhoneNumber' => str_contains($request->driver_phone_number, '+') ? $request->driver_phone_number : '+' . $request->driver_phone_number,
                'cost' => $request->price,
                'rating' => 0,
                'route' => $request->route,
                'seat' => $request->seat,
                'status' => 'Dalam Proses',
                'time' => Carbon::now()->toIso8601String(),
            ];

            if ($request->seat == 'A1') {
                $dataTrips = [
                    'A1' => str_contains($request->client_phone_number, '+') ? $request->client_phone_number : '+' . $request->client_phone_number,
                ];
            }
            if ($request->seat == 'A2') {
                $dataTrips = [
                    'A2' => str_contains($request->client_phone_number, '+') ? $request->client_phone_number : '+' . $request->client_phone_number,
                ];
            }
            if ($request->seat == 'A3') {
                $dataTrips = [
                    'A3' => str_contains($request->client_phone_number, '+') ? $request->client_phone_number : '+' . $request->client_phone_number,
                ];
            }
            if ($request->seat == 'A4') {
                $dataTrips = [
                    'A4' => str_contains($request->client_phone_number, '+') ? $request->client_phone_number : '+' . $request->client_phone_number,
                ];
            }

            $this->firestore->collection('orders')->add($data);

            $this->firestore->collection('trips')->document($request->trip_id)->set($dataTrips, ['merge' => true]);

            $response = Http::asForm()->post('https://wa.srv2.wapanels.com/send-message', [
                'api_key' => '0GxB0JURoGbukwlxok6sY9DKhnyjQTvy',
                'sender' => '6285171121070',
                'number' => $request->driver_phone_number,
                'message' => "*Penumpang Bertambah*\n\n*".$request->display_name . "* baru saja bergabung dalam perjalanan anda rute *" . $request->route . "* pada tanggal ".$request->date.". Untuk melihat detail silahkan buka aplikasi Driver Berangkut. \n\n*Admin Berangkut*",
            ]);

            return response()->json('Reservasi Travel Berhasil');
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
