<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->firestore = app('firebase.firestore')->database();
    }

    function dashboard()
    {
        $data['title'] = 'Beranda';
        $data['users'] = $this->firestore->collection('users')->documents();
        $data['drivers'] = $this->firestore->collection('drivers')->documents();
        $data['registrants'] = $this->firestore->collection('drivers')->where('status', '=', 'registrant')->documents();
        $data['trips'] = $this->firestore->collection('trips')->documents();
        $data['routes'] = $this->firestore->collection('routes')->documents();
        $data['orders'] = $this->firestore->collection('orders')->documents();

        return view('admin.dashboard', $data);
    }
}
