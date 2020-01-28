<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihanController extends Controller
{

    public function index(){
        echo "ini method index pada controller latihan";
    }

    public function halo(){
        echo "ini method halo pada controller latihan";
    }

    //latihan buat 4 method isi nya ada pertamabahan,pengurangan
public function pertambahan($w =10,$d = 10){
    $hasil = $w+ $d;
    return $hasil;

}
//latihan 2
public function pusing($a =0,$b = 0){
    $star = $a+$b;
    $hals = $a+$b;
    if (isset($a)){
        $star = $a. "+";
    }
    if(isset($b)){
        $star = $b . '='. $hals;
    }
    return $star;
}

//latihan 04
public function loop()
{
    $data = [
            ['name' =>'hari', 'kelas' =>'kelas1', 'uang_jajan' => 10000],
            ['name' => 'memet', 'kelas' =>'kelas2', 'uang_jajan' =>25000],
            ['name' => 'david', 'kelas' =>'kelas3', 'uang_jajan' =>50000],
            ['name' => 'memet', 'kelas' =>'kelas4', 'uang_jajan' =>25000],
            ['name' =>'hari', 'kelas' =>'kelas5', 'uang_jajan' => 10000],
    ];
//
    foreach($data as $val => $key){


    if ($key['uang_jajan'] >= 50000){
        $tabungan = $key['uang_jajan'] * 25/100;
        $sisa = $key['uang_jajan'] - $tabungan;
    }else if ($key['uang_jajan'] >= 25000) {
        $tabungan = $key['uang_jajan'] * 15/100;
        $sisa = $key['uang_jajan'] - $tabungan;
    }else if ($key['uang_jajan'] >= 10000) {
        $tabungan = $key['uang_jajan'] * 10/100;
        $sisa = $key['uang_jajan'] - $tabungan;
    }

    echo "<br>name =" .$key['name'],
        "<br>kelas =" .$key['kelas'],
        "<br>uang_jajan" .$key['uang_jajan'],
        "<br>uang tabungan" . $tabungan,
        "<br>uang sisa" .$sisa;
    echo "<hr>";

        }
    }

    //latihan 05
    public function karwan()
    {
        $data[
            ['']
        ];
    }
}
