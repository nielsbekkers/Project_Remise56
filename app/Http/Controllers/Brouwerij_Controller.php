<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Brouwerij_Controller extends Controller
{
    public function home(){
        $menuTop = "Brouwerij";
        return view('brouwerij',compact('menuTop'));
    }
}
