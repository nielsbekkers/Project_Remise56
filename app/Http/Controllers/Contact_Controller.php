<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Contact_Controller extends Controller
{
    public function home(){
        $menuTop = "Contact";
        return view('contact',compact('menuTop'));
    }
}
