<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class costumerController extends Controller
{
    public function index()
    {
        $costumer = \App\costumer::all();
        return $tabung;
    }

    public function show($id)
    {
        $costumer = \App\costumer::find($id);
        return $costumer;
    }

    public function store()
    {
        $costumer = new Costumer($kode_costumer=null ,$name=null ,$email=null, $country=null, $city=null,
            $address=null, $contact_number=null);
        $costumer->kode_costumer=$kode_costumer;
        $costumer->name=$name;
        $costumer->email=$email;
        $costumer->country=$country;
        $costumer->city='bandung';
        $costumer->address='kamil';
        $costumer->contact_number='008882211';
        $costumer->save();
        return $costumer;

    }
}
