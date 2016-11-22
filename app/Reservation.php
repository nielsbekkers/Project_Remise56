<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model implements  Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    function getContent()
    {
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
}