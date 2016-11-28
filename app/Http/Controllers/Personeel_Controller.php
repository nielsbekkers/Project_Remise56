<?php
/**
 * Created by PhpStorm.
 * User: Soufiane
 * Date: 4/11/2016
 * Time: 22:08
 */

namespace  App\Http\Controllers;

use Mail;
use App\User;
use App\Http\Models\Personeel_Model;
use App\Http\Models\Reservatie_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/////////////////////////       Deze controller bevat alle methodes voor het Remise 56 DASHBOARD
class Personeel_Controller extends Controller
{


    public function getHome(){
        return view('personeel.nieuweReservatieRestaurant');

    }

    /////////////////////////       De volgende functies wordt gebruikt om de juiste pagina te laden voor het Remise 56 DASHBOARD
    public function getPagina($sPaginaNaam){

        switch($sPaginaNaam){
            case "inloggen" :
                return view('personeel.inloggen');
                break;

/*            case "personeel":
                //return view('personeel.reservaties');
                $aPersoneel = $this->getPersoneel();

                return view('personeel.personeel', compact('aPersoneel'));

                break;*/

/*            case "nieuwPersoneelsLid" :
                return view('personeel.nieuwPersoneelsLid');
                break;*/

            case "nieuweReservatieRest" :
                return view('personeel.nieuweReservatieRestaurant');
                break;

            case "nieuweReservatieRond" :
                return view('personeel.nieuweReservatieRondleiding');
                break;

            case "reservaties" :
                $reservaties = $this->getReservaties();
                $menuTop = "sReservaties";
                return view('personeel.reservaties', compact('menuTop', 'reservaties','errorReport'));

                break;
            case "verwijderReservatie" :
                return 'nothing';
                break;

            default :
                return view('personeel.reservaties');
//                return view('personeel.inloggen');

                break;


        }

    }


    /////////////////////////       De volgende functies worden gebruikt voor PERSONEEL mbv het Personeel_Model
    public function getPersoneel(){
        $oPersoneel = new Personeel_Model();
        $aPersoneel = $oPersoneel->getPersoneel();

        return $aPersoneel;
    }

    public function nieuwPersoneelsLid(Request $request){
        $oPersoneel = new Personeel_Model();
        $bResult = $oPersoneel->nieuwPersoneelsLid($request);

        return view('personeel.nieuwPersoneelsLid', compact('bResult'));
    }


    /////////////////////////       De volgende functies worden gebruikt voor RESERVATIES mbv het Reservatie_Model
    public function getReservaties(){

        $oReservatie = new Reservatie_Model();
        $Reservaties = $oReservatie->getReservaties();
        return $Reservaties;


    }

    public function nieuweReservatieRest(Request $request){
        $oReservatie = new Reservatie_Model();
        $bResult = $oReservatie->nieuwReservatieRest($request);
        $data = array(
            "bevestigingsLink" => "http://www.google.be/",
            "volledigeNaam" => "Achternaam Voornaam",
            "aantalPersonen" => "14",
            "tijdstip" => "15:00"
        );
        Mail::send('mail.bevestiging', $data, function($message) {
            $message->to('bielenalexander@gmail.com', 'Reservatie Bevestiging')->subject('Reservatie bij Remise 56 te Koersel');
        });

        return view('personeel.nieuweReservatieRestaurant', compact('bResult'));

    }

    public function nieuweReservatieRond(Request $request){
        $oReservatie = new Reservatie_Model();
        $bResult = $oReservatie->nieuwReservatieRond($request);


        return view('personeel.nieuweReservatieRondleiding', compact('bResult'));
    }

    public function verwijderReservatie($reservatieId) {
        $oReservatie = new Reservatie_Model();
        $bResult = $oReservatie->verwijderReservatie($reservatieId);
        echo $bResult;
        return $bResult;
    }

    /////////////////////////       De volgende functies worden gebruikt voor MENU ITEMS mbv het MenuItem_Model
    public function getMenuItems(){

    }

    public function nieuwMenuItems(){

    }


    /////////////////////////       De volgende functies worden gebruikt voor GALLERIJ mbv het Galerij_Model
    public function getGallerij(){

    }

    public function nieuwFotoUpload(){

    }



}