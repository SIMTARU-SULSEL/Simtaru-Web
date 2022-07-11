<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Kreait\Firebase\Firestore;

class CrudController extends Controller
{

    // public function __construct(Firestore $firestore)
    // {
    //     $firestore = app('firebase.firestore');
    //     $database = $firestore->database();
    //     $this->firestore = $firestore;
    //     $this->database = $database;
    //     $this->tablename = 'User';
    // }

    public function index()
    {
        // $datas = app('firebase.firestore')->database()->collection('Peta')->documents()->document('166f34ea1c9641dab0a0')->snapshot();
        $datas = app('firebase.firestore')->database()->collection('Peta')->document('0LP7G6affsbKc99sh5gD')->snapshot();
        return view('Main.Page.maps', ['datas' => $datas]);
        // return dd(print_r($datas->data()['mapUrl']));
    }

    public function insert()
    {
    }

    public function store()
    {
    }

    public function view(Request $request)
    {
        // if(){


        // }
        return dd($request);
        // return view('Main.Page.maps', ['datas' => $datas]);
    }
}
