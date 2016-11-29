<?php
/**
 * Created by PhpStorm.
 * User: Soufiane
 * Date: 16/11/2016
 * Time: 23:18
 */
namespace App\Http\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

/////////////////////////       Dit Model bevat alle methodes voor het aanmaken, opvragen van RESERVATIES en om de Content voor de pagina's op te halen.
class Reservatie_Model extends Model implements  Authenticatable
{
    use \Illuminate\Auth\Authenticatable;




    function getContent()
    {
        $sContent = 'Voor reservaties telefonisch contact opnemen <br> 011/18 31 93';

        return $sContent;
    }

    function getOpeningsUren()
    {
        return '<div class="col-md-3">
                        <p>Openingsuren 2016</p>
                        <ul>
                            <li> ma, di, wo, do, vr : Vanaf 11u doorlopend open.</li>
                            <li>za, zo : Vanaf 09u doorlopend open.</li>
                        </ul>
    
                    </div>';
    }


    public function getReservaties(){
        $errorReport = "";
        $reservaties = [];
        try {
            $reservaties = DB::select('select * from reservaties', [1]);
        } catch (\PDOException $e) {
            $reservaties = [];
            $errorReport = "Kan geen verbinding maken met de database";
        }

        if (!empty($reservaties)){
            return $reservaties;
        }
        else{
            return $errorReport;
        }
    }

    public function nieuwReservatieRest(Request $request){

    $sSoort = "Restaurant";
    $sShift = "Lunch";
    $sBevestigd = "ok";
    $sBevestingscode = "code";

    $dDatetime = new DateTime($request["frmReservatieRestDatum"]);
    $sTime1 = substr($request["frmReservatieRestTijd"], 0, 2);  // neemt de eerste 2 getallen voor de  ":"
    $sTime2 = substr($request["frmReservatieRestTijd"], 3, 2);  // neemt de  2 getallen na de  ":"

    $dDatetime->setTime($sTime1, $sTime2, 00);

    $iPersonen = $request["frmReservatieRestPersonen"];
    $sVoornaam = $request["frmReservatieRestVoornaam"];
    $sNaam = $request["frmReservatieRestAchternaam"];
    $sTelefoon = $request["frmReservatieRestTel"];
    $sEmail = $request["frmReservatieRestEmail"];
    $sNota = $request["frmReservatieRestNota"];

    $bResultaat ="";
    try {
        DB::insert('insert into reservaties (datumtijd, email, shift, soort, aantal_personen, voornaam, naam, telefoon, nota, bevestigd, bevestigingscode ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array($dDatetime, $sEmail, $sShift,  $sSoort, $iPersonen, $sVoornaam, $sNaam, $sTelefoon, $sNota, $sBevestigd, $sBevestingscode));
        $bResultaat = true;
    } catch (\PDOException $e) {
        $bResultaat = false;
    }


    return $bResultaat;


}

    public function nieuwReservatieRestKlant(Request $request){

        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcCPw0UAAAAAFBq9bWm6yOvosDSoiwGYfUgUl-g&response=".$request["g-recaptcha-response"]);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
            $bResultaat =  '<h2>You are spammer ! Get the @$%K out</h2>';
        } else {
            echo '<h2>Thanks for posting comment.</h2>';




            $sSoort = "Restaurant";
            $sShift = "Lunch";
            $sBevestigd = "ok";
            $sBevestingscode = "code";

            $dDatetime = new DateTime($request["frmReservatieRestDatum"]);
            $sTime1 = substr($request["frmReservatieRestTijd"], 0, 2);  // neemt de eerste 2 getallen voor de  ":"
            $sTime2 = substr($request["frmReservatieRestTijd"], 3, 2);  // neemt de  2 getallen na de  ":"

            $dDatetime->setTime($sTime1, $sTime2, 00);

            $iPersonen = $request["frmReservatieRestPersonen"];
            $sVoornaam = $request["frmReservatieRestVoornaam"];
            $sNaam = $request["frmReservatieRestAchternaam"];
            $sTelefoon = $request["frmReservatieRestTel"];
            $sEmail = $request["frmReservatieRestEmail"];
            $sNota = $request["frmReservatieRestNota"];

            $bResultaat ="";
            try {
                DB::insert('insert into reservaties (datumtijd, email, shift, soort, aantal_personen, voornaam, naam, telefoon, nota, bevestigd, bevestigingscode ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array($dDatetime, $sEmail, $sShift,  $sSoort, $iPersonen, $sVoornaam, $sNaam, $sTelefoon, $sNota, $sBevestigd, $sBevestingscode));
                $bResultaat = true;
            } catch (\PDOException $e) {
                $bResultaat = false;
            }
        }

        return $bResultaat;


    }

    public function nieuwReservatieRond(Request $request){
        $sSoort = "Rondleiding";
        $sShift = "Lunch";
        $sBevestigd = "ok";
        $sBevestingscode = "code";

        $dDatetime = new DateTime($request["frmReservatieRondDatum"]);

        $sTime1 = substr($request["frmReservatieRondTijd"], 0, 2);  // neemt de eerste 2 getallen voor de  ":"
        $sTime2 = substr($request["frmReservatieRondTijd"], 3, 2);  // neemt de  2 getallen na de  ":"

        $dDatetime->setTime($sTime1, $sTime2, 00);

        $iPersonen = $request["frmReservatieRondPersonen"];
        $sVoornaam = $request["frmReservatieRondVoornaam"];
        $sNaam = $request["frmReservatieRondAchternaam"];
        $sTelefoon = $request["frmReservatieRondTel"];
        $sEmail = $request["frmReservatieRondEmail"];
        $sNota = $request["frmReservatieRondNota"];

        try {
            DB::insert('insert into reservaties (datumtijd, email, shift, soort, aantal_personen, voornaam, naam, telefoon, nota, bevestigd, bevestigingscode ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array($dDatetime, $sEmail, $sShift,  $sSoort, $iPersonen, $sVoornaam, $sNaam, $sTelefoon, $sNota, $sBevestigd, $sBevestingscode));
            $bResultaat = true;
        } catch (\PDOException $e) {
            $bResultaat = false;
        }
        return $bResultaat;

    }

    public function geefContentBrouwerijReservatie(){
        $content = array(
            'HoofdTitel' => '<h2 class="heading">Reservatie</h2>',
            'HoofdOmschrijving' => '<p>Vanaf 2016 is ons restaurant enkel geopend voor de lunch op vrijdagmiddag en voor diner op vrijdag en zaterdag.
                        Uitzonderingen hierop zijn :11,12 en 13 oktober zijn wij uitzonderlijk geopend voor het diner en dit voor een drie, vier of vijfgangenmenu vanaf 40 euro*Donderdag 10 november (wij serveren het 6g maandmenu puur natuur)
                    </p>',
            'SluitingsTijden' =>'<ul>
                        <li>Zondag 1 januari t/m donderdag 19 januari</li>
                        <li>Zondag 1 januari t/m donderdag 19 januari</li>
                        <li>Zondag 2 juli t/m woensdag 19 juli</li>
                    </ul>'
        );

        return $content;
    }

    public function geefContentGrandCafeReservatie(){
        $content = array(
            'HoofdTitel' => '<h2 class="heading">Reservatie</h2>',
            'HoofdOmschrijving' => '<p>Vanaf 2016 is ons restaurant enkel geopend voor de lunch op vrijdagmiddag en voor diner op vrijdag en zaterdag.
                            Uitzonderingen hierop zijn :11,12 en 13 oktober zijn wij uitzonderlijk geopend voor het diner en dit voor een drie, vier of vijfgangenmenu vanaf 40 euro*Donderdag 10 november (wij serveren het 6g maandmenu puur natuur)
                        </p>',
            'SluitingsTijden' =>'<ul>
                            <li>Zondag 1 januari t/m donderdag 19 januari</li>
                            <li>Zondag 1 januari t/m donderdag 19 januari</li>
                            <li>Zondag 2 juli t/m woensdag 19 juli</li>
                        </ul>'
        );

        return $content;
    }

    public function verwijderReservatie($reservatieId) {
        return DB::table('reservaties')->where('id', '=', $reservatieId)->delete();
    }

}