<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pendaftaranController extends Controller
{
    public function index()
    {
        return view('Main.Page.pendaftaran');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'KTP' => 'required',
            'Nama' => 'required',
            'Gender' => 'required',
            'Alamat' => 'required',
            'Provinsi' => 'required',
            'KotaKabupaten' => 'required',
            'Kecamatan' => 'required',
            'KodePos' => 'required',
            'Pekerjaan' => 'required',
            'StatusKewarganegaraan' => 'required',
            'Email' => 'required|email',
            'NomorHandphone' => 'required',
        ]);
        $newDatas = app('firebase.firestore')->database()->collection('DaftarPerizinan')->newDocument();
        $newDatas->set([
            'KTP' => $validatedData['KTP'],
            'Nama' => $request->Nama,
            'Gender' => $request->Gender,
            'Alamat' => $request->Alamat,
            'Provinsi' => $request->Provinsi,
            'KotaKabupaten' => $request->KotaKabupaten,
            'Kecamatan' => $request->Kecamatan,
            'KodePos' => $request->KodePos,
            'Pekerjaan' => $request->Pekerjaan,
            'StatusKewarganegaraan' => $request->StatusKewarganegaraan,
            'Email' => $request->Email,
            'NomorHandphone' => $request->NomorHandphone,
        ]);
        return view('Main.Page.pendaftaran');
    }
}
