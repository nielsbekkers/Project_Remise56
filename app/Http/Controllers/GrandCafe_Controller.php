<?php

namespace App\Http\Controllers;
use App\Http\Models\GrandCafe_Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Brouwerij_Model;
use App\Http\Models\Reservatie_Model;
use App\Http\Models\Navigatie_Model;
use App\Gallery;

class GrandCafe_Controller extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function getPagina($paginaNaam = null) {
        $navigatieModel = new Navigatie_Model();
        $navigatie = $navigatieModel->geefNavigatieGrandCafe();
        switch($paginaNaam) {
            case 'contact':
                $menuTop = "Contact";
                return view('contact',compact('menuTop', 'navigatie'));
                break;
            case 'fotos':
                $menuTop = "Foto's";
                $galleries = Gallery::all();
                return view('foto',compact('menuTop', 'navigatie'))->with('galleries',$galleries);
                break;
            case 'reservatie':
                $menuTop = 'Reservatie';
                $reservatieModel = new Reservatie_Model();
                $sContent = $reservatieModel->getContent();
                return view('reservatie', compact('menuTop','sContent', 'navigatie'));
                break;
            case 'menu':
                $menuTop = 'Menu';
                return view('menu', compact('menuTop','navigatie'));
                break;
            default:
                $menuTop = "Grand Café";
                $grandcafeModel=new GrandCafe_Model();
                $aContent = $grandcafeModel->geefBeginPaginaContent();
                return view('grandcafe', compact('menuTop', 'aContent', 'navigatie'));
                break;
        }
    }

}