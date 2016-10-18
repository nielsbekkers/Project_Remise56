<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Menu_Controller extends Controller
{
    public function home(){
        $menuTop = "Menu";
        return view('menu',compact('menuTop'));
    }
}
