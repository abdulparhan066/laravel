<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function index()
    {
        $roll = \App\Motor::all();
        return view('Motor', compact('roll'));
    }

    public function yeah($id)
    {
        $roll = \App\Motor::find($id);
        return view('Motor', compact('roll'));
    }
}
