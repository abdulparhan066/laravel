<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praktikController extends Controller
{
    public function pass() {
        $data = "REZA OKTA";
        return view("latihan", compact('data'));
    }

    public function pass1() {
        $siswaa =
        [
        'name' => 'Kismin', 'kelas'=>'XI RPL 1',
        'name' => 'kosmon', 'kelas'=>'XI RPL 1',
        ];
        return view("latihan", ('data' -> $siswaa));

    }
}
