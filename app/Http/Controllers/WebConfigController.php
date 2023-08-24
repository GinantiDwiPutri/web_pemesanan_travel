<?php

namespace App\Http\Controllers;

use App\Models\WebConfig;
use Illuminate\Http\Request;

class WebConfigController extends Controller
{
    function contact()
    {
        $data['title'] = 'Kontak';
        $data['web'] = WebConfig::first();

        return view('admin.other.contact', $data);
    }

    function contactUpdate(Request $request)
    {
        $web = WebConfig::first();
        $web->email = $request->email;
        $web->phone = $request->phone;
        $web->facebook = $request->facebook;
        $web->instagram = $request->instagram;
        $web->short_about = $request->about;
        $web->save();

        return response()->json([
            'status' => 201,
            'message' => 'Data Berhasil Diperbaharui',
        ]);
    }

    function privacyPolicy()
    {
        $data['title'] = 'Kebijakan Privasi';
        $data['web'] = WebConfig::first();

        return view('admin.other.privacy-policy', $data);
    }

    function termsAndConditions()
    {
        $data['title'] = 'Ketentuan Layanan';
        $data['web'] = WebConfig::first();

        return view('admin.other.terms-and-conditions', $data);
    }

    function update(Request $request)
    {
        $web = WebConfig::first();

        if ($request->privacy_policy) {
            $web->privacy_policy = $request->privacy_policy;
            $web->save();

            return response()->json([
                'status' => 201,
                'message' => 'Kebijakan Privasi Berhasil Diperbaharui',
            ]);
        } else {
            $web->terms_and_condition = $request->terms_and_condition;
            $web->save();

            return response()->json([
                'status' => 201,
                'message' => 'Ketentuan Layanan Berhasil Diperbaharui',
            ]);
        }
    }
}
