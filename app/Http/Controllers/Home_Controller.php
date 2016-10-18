<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Home_Controller extends Controller
{
    public function home(){
        $menuTop = "Home";
        return view('home',compact('menuTop'));
    }
}
