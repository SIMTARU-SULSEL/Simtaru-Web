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
            'nik' => $validatedData['KTP'],
            'nama' => $request->Nama,
            'jeniskelamin' => $request->Gender,
            'alamat' => $request->Alamat,
            'provinsi' => $request->Provinsi,
            'kabKota' => $request->KotaKabupaten,
            'kecamatan' => $request->Kecamatan,
            'kodePos' => $request->KodePos,
            'pekerjaan' => $request->Pekerjaan,
            'kewarganegaraan' => $request->StatusKewarganegaraan,
            'email' => $request->Email,
            'noTlp' => $request->NomorHandphone,
        ]);
        return view('Main.Page.pendaftaran');
    }
}
