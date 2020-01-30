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

    public function store($kode_costumer, $name, $email, $country, $city, $address, $contact_number)
    {
        $costumer = new CostumerCostumer();
        $costumer->$kode_costumer;
        $costumer->$name;
        $costumer->$email;
        $costumer->$country;
        $costumer->$city;
        $costumer->$address;
        $costumer->$contact_number;
        $costumer->save();
        return $costumer;

    }
}
