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
        $sContentTitel = "Hello World";

        //$sContent ='<h2>Reservatie</h2>';


        $sContent = '
        <div class="col-md-8">
                    <p style="text-align: center">Online Reserveren</p>

                    <div class="container">
                        <div class="row">

                        </div>
                    </div>

                    <form class="form-horizontal" action="{{route("createReservationClient")}}" method="post">
                        <div id="FrmReservatieDeel1">
                            <div id="FrmReservatieGroepDatum">
                                <label for="sel1">Kies een datum:</label>
                                <div  id="datepicker"></div>
                            </div>
                            <br>
                            <div id="FrmReservatieGroepUur">
                                <label for="sel1">Kies een uur:</label>
                                <select id="FrmReservatieUur" class="form-control" id="sel1" style=" text-align-last:center;">
                                    <option style=" text-align-last:center;">11.00</option>
                                    <option>11.30</option>
                                    <option>12.00</option>
                                    <option>12.30</option>
                                    <option>13.00</option>
                                    <option>13.30</option>

                                </select>
                            </div>
                            <br>
                            <div id="FrmReservatieGroepPersonen">
                                <label  for="sel1">Het aantal personen:</label>
                                <select id="FrmReservatiePersonen" class="form-control" id="sel1" style=" text-align-last:center;">
                                    <option style=" text-align-last:center;">1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <br>
                        </div>

                        <div id="FrmReservatieDeel2">
                            
                                <div class="form-group">
                                    <input type="text" name="FrmReservatieVoornaam" class="form-control" placeholder="Voornaam">
                                    <input type="text" name="FrmReservatieNaam" class="form-control" placeholder="Naam">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="FrmReservatieEmail" class="form-control" placeholder="Email" >
                                </div>
                                <div class="form-group">
                                    <input type="text" name="FrmReservatieTel" class="form-control" placeholder="tel" >
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="FrmReservatieNota" rows="2" placeholder="Speciale wensen, Allergieën, ..." cols="20"></textarea>

                                </div>

                                <button type="submit" name="FrmReservatieSubmit" class="btn btn-default">Reserveren</button>
                            

                        </div>


                        <!-- Beveiliging als iemand uw session key heeft-->
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form>

                </div>';

        return $sContent;
    }

    public function getReservationForm()
    {

        return 'test';


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
        $sTime1 = substr($request["frmReservatieRestTijd"], 0, 2);  // abcd
        $sTime2 = substr($request["frmReservatieRestTijd"], 3, 2);  // abcd

        $dDatetime->setTime($sTime1, $sTime2, 00);


        //$dDatum = $request["frmReservatieRestDatum"];
        $iPersonen = $request["frmReservatieRestPersonen"];

        //$sType = $request["frmReservatieRestType"];
        $sVoornaam = $request["frmReservatieRestVoornaam"];
        $sNaam = $request["frmReservatieRestNaam"];

        $sTelefoon = $request["frmReservatieRestTelefoon"];
        $sEmail = $request["frmReservatieRestEmail"];
        $sNota = $request["frmReservatieRestNota"];

       // DB::insert('insert into reservaties (datum, tijd, email, shift, soort, aantal_personen, voornaam, naam, telefoon, nota, bevestigd, bevestigingscode ) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array($dDatum, $tTijd, $sEmail, $sShift,  $sSoort, $iPersonen, $sVoornaam, $sNaam, $sTelefoon, $sNota, $sBevestigd, $sBevestingscode));



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

}