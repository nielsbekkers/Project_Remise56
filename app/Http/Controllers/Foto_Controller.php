<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Foto_Controller extends Controller
{
    public function home(){
        $menuTop = "Foto";
        return view('foto',compact('menuTop'));
    }
}