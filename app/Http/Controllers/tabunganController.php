<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tabunganController extends Controller
{
    public function index()
    {
        $tabungan = \App\tabungan::all();
        return $tabungan;
    }

    public function how($id)
    {
        $tabungan = \App\tabungan::find($id);
        return $tabungan;
    }
    public function store($id,$nis=null, $name=null, $kelas=null, $jumlah=null)
    {
        $tabungan = new tabungan();
        $tabungan ->nis = "$nis";
        $tabungan ->name = "$name";
        $tabungan ->kelas = "$kelas";
        $tabungan ->jumlah = "$jumlah";
        $tabungan ->save();
        return $tabungan;
    }
}
