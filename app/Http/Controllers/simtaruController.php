<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class simtaruController extends Controller
{
    public function index()
    {
        return view('Main.Page.index');
    }

    public function regulasiIndex()
    {
        return view('Main.Page.regulasi');
    }

    public function mapsIndex()
    {
        $datas = app('firebase.firestore')->database()->collection('Peta')->document('0LP7G6affsbKc99sh5gD')->snapshot();
        return view('Main.Page.maps', ['datas' => $datas]);
    }

    public function mapsDetail(Request $request)
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

    public function pendaftaranIndex()
    {
        return view('Main.Page.pendaftaran');
    }

    public function pendaftaranStore(Request $request)
    {
        $validatedData = $request->validate([
            //     'KTP' => 'required',
            //     'Nama' => 'required',
            //     'Gender' => 'required',
            //     'Alamat' => 'required',
            //     'Provinsi' => 'required',
            //     'KotaKabupaten' => 'required',
            //     'Kecamatan' => 'required',
            //     'KodePos' => 'required',
            //     'Pekerjaan' => 'required',
            //     'StatusKewarganegaraan' => 'required',
            //     'Email' => 'required|email',
            //     'NomorHandphone' => 'required',
            'SHP' => 'required|file|mimes:rar'
        ]);

        $current_time = new Carbon();
        $current_time->timezone('GMT+8');
        $current_time = $current_time->toDateTimeString();

        $SHP = $request->file('SHP');
        // $name = $SHP->getClientOriginalName();
        // $extension = $SHP->getClientOriginalExtension();
        $file = $SHP->getClientOriginalName();
        $firebase_storage_path = 'SHP/';
        $localfolder = public_path('firebase-temp-uploads') . '/';
        if ($SHP->move($localfolder, $file)) {
            $uploadedfile = fopen($localfolder . $file, 'r');
            app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $file]);
            //will remove from local laravel folder  
            // unlink($localfolder . $file);
        }

        // return dd($file);
        // $name     = $student->id();
        // $extension = $request->SHP->getClientOriginalExtension();

        // $newDatas = app('firebase.firestore')->database()->collection('DaftarPerizinan')->newDocument();

        // $newDatas->set([
        //     'created_at' => $current_time,
        //     'nik' => $validatedData['KTP'],
        //     'nama' => $request->Nama,
        //     'jenisKelamin' => $request->Gender,
        //     'alamat' => $request->Alamat,
        //     'provinsi' => $request->Provinsi,
        //     'kabKota' => $request->KotaKabupaten,
        //     'kecamatan' => $request->Kecamatan,
        //     'kodePos' => $request->KodePos,
        //     'pekerjaan' => $request->Pekerjaan,
        //     'kewarganegaraan' => $request->StatusKewarganegaraan,
        //     'email' => $request->Email,
        //     'noTlp' => $request->NomorHandphone,
        //     'koordinat' => '...',
        //     'fileUrl' => '...'
        // ]);
        return view('Main.Page.pendaftaran');
    }

    public function tanggapanIndex()
    {
        return view('Main.Page.comment');
    }

    public function tanggapanStore(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'judul' => 'required',
            'pesan' => 'required',
        ]);
        $newDatas = app('firebase.firestore')->database()->collection('Tangggapan')->newDocument();
        $newDatas->set([
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'judul' => $validatedData['judul'],
            'pesan' => $validatedData['pesan'],
        ]);
    }
}
