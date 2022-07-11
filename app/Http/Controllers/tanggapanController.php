<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tanggapanController extends Controller
{
    public function index()
    {
        return view('Main.Page.comment');
    }

    public function store(Request $request)
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
