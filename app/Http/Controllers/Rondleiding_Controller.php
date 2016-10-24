<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Rondleiding_Controller extends Controller
{
    public function home(){
        $menuTop = "Rondleiding";
        return view('rondleiding',compact('menuTop'));
    }
}