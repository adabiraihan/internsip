<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        $data_lowongan = DB::table('lowongan')->get();
        return view('/lowongan')
                -with(['data_lowongan' => $data_lowongan]);
    }

    public function applyLowongan(Request $req)
    {
        $data = new Lowongan();

        $data->id_pelamar = $req->id_pelamar;
        $data->id_lowongan = $req->id_lowongan;
        $data->tanggal_apply = $req->tanggal_apply;
        $data->save();
        return redirect('/lowongan')->with('data_uploaded', 'Berhasil menambah lowongan')
    }
}