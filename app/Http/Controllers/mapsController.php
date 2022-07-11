<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Kreait\Firebase\Firestore;

class mapsController extends Controller
{
    public function index()
    {
        // $datas = app('firebase.firestore')->database()->collection('Peta')->documents()->document('166f34ea1c9641dab0a0')->snapshot();
        $datas = app('firebase.firestore')->database()->collection('Peta')->document('0LP7G6affsbKc99sh5gD')->snapshot();
        return view('Main.Page.maps', ['datas' => $datas]);
        // return dd(print_r($datas->data()['mapUrl']));
    }

    public function show(Request $request)
    {
        if ($request->Kota == 'Makassar' && $request->RTR == 'RTRW Kab/Kota') {
            $datas = app('firebase.firestore')->database()->collection('Peta')->document('EC4sTg1OI0EMyNqKlJxv')->snapshot();
        } elseif ($request->Kota == 'Gowa' && $request->RTR == 'RTDTR Kab/Kota') {
            $datas = app('firebase.firestore')->database()->collection('Peta')->document('aMm5oKrJaeCMESgpPqjK')->snapshot();
        } elseif ($request->Kota == 'Maros' && $request->RTR == 'RTDTR Kab/Kota') {
            $datas = app('firebase.firestore')->database()->collection('Peta')->document('dhqNLJ8DlIuwUDD4IpBk')->snapshot();
        } elseif ($request->Kota == 'Makassar' && $request->RTR == 'RTR Maminasata') {
            $datas = app('firebase.firestore')->database()->collection('Peta')->document('0LP7G6affsbKc99sh5gD')->snapshot();
        } else {
            $datas = null;
        }
        return view('Main.Page.maps', ['datas' => $datas]);
    }
}
