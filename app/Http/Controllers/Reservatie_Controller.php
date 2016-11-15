<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Reservation;

class Reservatie_Controller extends Controller
{
    public function home(){
        $menuTop = "Reservatie";
        return view('reservatie',compact('menuTop'));
    }


    public function getContent(){
        $reservationModel = new Reservation();

        $content  =  $reservationModel->getContent();

        $menuTop = "Reservatie";
        return view('reservatie',compact('menuTop', 'content'));
    }
}
