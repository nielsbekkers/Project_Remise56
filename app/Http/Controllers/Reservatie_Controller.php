<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Reservatie_Controller extends Controller
{
    public function home(){
        $menuTop = "Reservatie";
        return view('reservatie',compact('menuTop'));
    }
}
