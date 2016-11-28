<?php

namespace App\Http\Controllers;
use App\Http\Models\Content_Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Brouwerij_Model;
use App\Http\Models\Reservatie_Model;
use App\Http\Models\Navigatie_Model;
use App\Gallery;

class GrandCafe_Controller extends Controller
{
    public function getPagina($paginaNaam = null) {
        $menuTop = ucfirst($paginaNaam);
        $navigatieModel = new Navigatie_Model();
        $contentModel = new Content_Model();
        $navigatie = $navigatieModel->geefNavigatie('grandcafe');
        $navigatieResponsive = $navigatieModel->geefNavigatieResponsive('grandcafe');

        $templates = $contentModel->getTemplateNames($paginaNaam);
        if(!$templates) {
            return view('errors.404');//er is geen pagina inhoud beschikbaar
        }
        $aTemp = explode(";",$templates);
        $aTemplates = [];
        foreach($aTemp as $item) {
            $aGegevens = $contentModel->getContentFor($item,$paginaNaam);
            $aTemplates[$item] = $aGegevens;
        }
        return view('master_view', compact('menuTop','navigatie','navigatieResponsive','aTemplates'));
    }

    public function nieuweReservatie(Request $request){
        echo "inde functie";
        echo $request["frmReservatieRestTijd"];
        $oReservatie = new Reservatie_Model();
       $result = $oReservatie->nieuwReservatieRestKlant($request);

        var_dump($result);


    }

}