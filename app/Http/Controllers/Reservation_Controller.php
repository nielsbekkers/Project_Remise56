<?php
/**
 * Created by PhpStorm.
 * User: Soufiane
 * Date: 4/11/2016
 * Time: 23:44
 */
namespace  App\Http\Controllers;

use App\User;
use App\Reservation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Reservation_Controller extends Controller
{

    public function createReservationClient(Request $request){

        $persons = $request["frmReservationPersons"];
        $date = $request["frmReservationDate"];
        $hour = $request["frmReservationTime"];
        $type = $request["frmReservationType"];
        $surname = $request["frmReservationSurname"];
        $name = $request["frmReservationName"];

        $phone = $request["frmReservationPhone"];
        $email = $request["frmReservationEmail"];
        $notes = $request["frmReservationNotes"];


        $reservation = new Reservation();
        $reservation->persons = $persons;
        $reservation->date = $date;
        $reservation->hour =$hour;
        $reservation->type = $type;
        $reservation->surname = $surname;
        $reservation->name = $name;

        $reservation->phone = $phone;
        $reservation->email = $email;
        $reservation->notes = $notes;

        $reservation->save();

        return redirect()->back();

    }

    public function createReservationAdmin(Request $request){


        $persons = $request["frmReservationPersons"];
        $date = $request["frmReservationDate"];
        $hour = $request["frmReservationTime"];
        $type = $request["frmReservationType"];
        $surname = $request["frmReservationSurname"];
        $name = $request["frmReservationName"];

        $phone = $request["frmReservationPhone"];
        $email = $request["frmReservationEmail"];
        $notes = $request["frmReservationNotes"];


        $reservation = new Reservation();
        $reservation->aantal_personen = $persons;
        $reservation->datum = $date;
        $reservation->shift ="Lunch";
        $reservation->soort = "Rondleiding";
        $reservation->voornaam = $surname;
        $reservation->achternaam = $name;

        $reservation->telefoon = $phone;
        $reservation->email = $email;
        $reservation->nota = $notes;

        $reservation->save();

        return redirect()->back();

    }






}