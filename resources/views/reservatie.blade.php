@extends('layouts.grand_cafe_layout')

@section('content')
    <div style="background-color: #fafafa;">
        <div class="container" style="padding-top: 40px;">
            <div class="row fh5co-heading row-padded text-center">
                <div class="col-md-12">
                    <h2 class="heading">Reservatie</h2>
                    <p>Vanaf 2016 is ons restaurant enkel geopend voor de lunch op vrijdagmiddag en voor diner op vrijdag en zaterdag.
                        Uitzonderingen hierop zijn :11,12 en 13 oktober zijn wij uitzonderlijk geopend voor het diner en dit voor een drie, vier of vijfgangenmenu vanaf 40 euro*Donderdag 10 november (wij serveren het 6g maandmenu puur natuur)
                    </p>
                </div>


            </div>
            <div class="row fh5co-heading row-padded text-center">
                <div class="col-md-4">
                    <p>Sluitingsperiodes 2016</p> <br>

                    <ul>
                        <li>Zondag 1 januari t/m donderdag 19 januari</li>
                        <li>Zondag 1 januari t/m donderdag 19 januari</li>
                        <li>Zondag 2 juli t/m woensdag 19 juli</li>
                    </ul>

                </div>

                <div class="col-md-8">
                    <p style="text-align: center">Online Reserveren</p>

                    <form class="form-horizontal" action="{{route("createReservationClient")}}" method="post">

                        <div class="form-group">
                            <label class="col-sm-4  control-label" >Reserveren bij</label>
                            <label style="text-align: left" class="col-sm-8 control-label"><strong>Remise 56</strong></label>

                        </div>



                        <div class="form-group">
                            <label class="col-sm-4 control-label">Aantal personen</label>
                            <div class="col-sm-8">
                                {{--<select class="form-control" name="frmReservationPersons">
                                    <!--<option>Kies het aantal personen</option>-->
                                    <option>1 persoon</option>
                                    <option>2 personen</option>
                                    <option>3 personen</option>
                                    <option>4 personen</option>
                                    <option>5 personen</option>
                                </select>--}}
                                <input class="form-control" type="number" min="1" value="2" max="20" name="frmReservationPersons"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Datum</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="date" name="frmReservationDate"/>
                            </div>

                        </div>


                        <div class="form-group">
                            <label class="col-sm-4 control-label">Aankomstuur</label>
                            <div class="col-sm-8">

                                <input class="form-control" type="time" name="frmReservationTime" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-4 control-label">Type</label>
                            <div class="col-sm-8">
                                <input class="radio-inline"  type="radio" name="frmReservationType" value="person" checked /> Persoonlijk<br>
                                <input class="radio-inline" type="radio" name="frmReservationType" value="company"/> Bedrijf
                            </div>


                        </div>


                        <div class="form-group">
                            <label class="col-sm-4 control-label">Voornaam</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="frmReservationSurname" placeholder="uw voornaam..." type="text"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Familienaam</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="frmReservationName" placeholder="uw familienaam..." type="text"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-4 control-label">Telefoonnummer</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="frmReservationPhone" placeholder="0488111111" type="tel"/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-8">
                                <input class="form-control"  name="frmReservationEmail" placeholder="uwemail@hotmail.com" type="email"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Opmerkingen</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="frmReservationNotes" rows="2" placeholder="Speciale wensen, Allergieën, ..." cols="20"></textarea>
                            </div>
                        </div>

                        <div class="form-group" style="text-align: center">

                            <button class="btn btn-default" name="frmReservationSubmit" id="submit">Bevestigen</button>
                        </div>

                        <!-- Beveiliging als iemand uw session key heeft-->
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form>

                </div>
                {{--<div class="col-md-3">
                    <p>Openingsuren 2016</p>
                    <ul>
                        <li> ma, di, wo, do, vr : Vanaf 11u doorlopend open.</li>
                        <li>za, zo : Vanaf 09u doorlopend open.</li>
                    </ul>

                </div>--}}


            </div>
            {{--<div class="row fh5co-heading row-padded text-center">
                <div class="col-md-12">
                    <div class="fb-page" data-href="https://www.facebook.com/Remise56/?fref=ts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Remise56/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Remise56/?fref=ts">Remise 56</a></blockquote></div>

                </div>


            </div>--}}
        </div>
    </div>

    @stop
