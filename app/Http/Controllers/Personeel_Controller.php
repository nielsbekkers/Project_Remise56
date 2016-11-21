<?php
/**
 * Created by PhpStorm.
 * User: Soufiane
 * Date: 4/11/2016
 * Time: 22:08
 */

namespace  App\Http\Controllers;

use App\User;
use App\Http\Models\Personeel_Model;
use App\Http\Models\Reservatie_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/////////////////////////       Deze controller bevat alle methodes voor het Remise 56 DASHBOARD
class Personeel_Controller extends Controller
{
    public function postNewUser(Request $request){

        $email = $request["email"];
        $first_name = $request["name"];
        $password = bcrypt($request["password"]);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save();

        Auth::login($user);

        //return redirect()->back();
        return redirect()->route('dashboard');

    }

    public function postSignIn(Request $request){
        if (Auth::attempt(  ['email' => $request['email'] ,  'password' => $request['password'] ])){
            return redirect()->route('dashboard');

        }
        else{
            return redirect()->back();
        }
    }

    public function getDashboard(){
        return view('dashboard');
    }

    /////////////////////////       De volgende functies wordt gebruikt om de juiste pagina te laden voor het Remise 56 DASHBOARD
    public function getPagina($sPaginaNaam){

        switch($sPaginaNaam){
            case "" :
                return view('personeel.inloggen');
                break;

            case "personeel":
                //return view('personeel.reservaties');
                $aPersoneel = $this->getPersoneel();

                return view('personeel.personeel', compact('aPersoneel'));

                break;

            case "nieuwPersoneelsLid" :
                return view('personeel.nieuwPersoneelsLid');
                break;

            case "nieuweReservatieRest" :
                return view('personeel.nieuweReservatieRestaurant');
                break;

            case "nieuweReservatieRond" :
                return view('personeel.nieuweReservatieRondleiding');
                break;

            case "reservaties" :
                //return view('personeel.reservaties');
                $reservaties = $this->getReservaties();
                $menuTop = "sReservaties";
                //print_r($reservaties);
                return view('personeel.reservaties', compact('menuTop', 'reservaties','errorReport'));

                break;

            default :
                return view('personeel.inloggen');
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


        return view('personeel.nieuweReservatieRestaurant', compact('bResult'));

    }

    public function nieuweReservatieRond(Request $request){
        $oReservatie = new Reservatie_Model();
        $bResult = $oReservatie->nieuwReservatieRond($request);


        return view('personeel.nieuweReservatieRondleiding', compact('bResult'));
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