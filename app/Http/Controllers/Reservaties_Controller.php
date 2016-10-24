<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class Reservaties_Controller extends Controller
{
    public function home(){
        $menuTop = "Reservaties";
        $reservaties = [];
        try {
            $reservaties = DB::select('select * from reservaties', [1]);
        } catch (\PDOException $e) {
            $reservaties = [];
            $errorReport = "Kan geen verbinding maken met de database";
        }

        return view('personeel.reservaties', compact('menuTop', 'reservaties','errorReport'));
    }
}