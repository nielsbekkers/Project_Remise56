<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Brouwerij_Model;
use App\Http\Models\Reservatie_Model;
use App\Http\Models\Navigatie_Model;
use App\Gallery;

class Brouwerij_Controller extends Controller
{
    public function getPagina($paginaNaam = null) {
        $navigatieModel = new Navigatie_Model();
        $navigatie = $navigatieModel->geefNavigatieBrouwerij();
        $navigatieResponsive= $navigatieModel->geefNavigatieBrouwerijResponsive();
        switch($paginaNaam) {
            case 'contact':
                $menuTop = "Contact";
                return view('contact',compact('menuTop', 'navigatie', 'navigatieResponsive'));
                break;
            case 'gallerij':
                $menuTop = "Foto";
                $galleries = Gallery::all();
                return view('foto',compact('menuTop', 'navigatie', 'navigatieResponsive'))->with('galleries',$galleries);
                break;
            case 'rondleiding':
                $menuTop = 'Rondleidingen';
                $reservatieModel = new Reservatie_Model;
                $aContent = $reservatieModel->geefContentBrouwerijReservatie();
                return view('rondleiding', compact('menuTop', 'navigatie', 'navigatieResponsive'));
                break;
            default:
                $menuTop = "Brouwerij";
                $brouwerijModel = new Brouwerij_Model;
                $aContent = $brouwerijModel->geefBeginPaginaContent();
                return view('brouwerij', compact('menuTop', 'aContent', 'navigatie', 'navigatieResponsive'));
                break;
        }
    }
}
