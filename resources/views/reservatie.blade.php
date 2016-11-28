@extends('layouts.master_layout')

@section('extra_css')
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/reservatiestyle.css">
    <script src="../js/reservatie.js"></script>

    @stop

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
                {{--{!!html_entity_decode($sContent)!!}--}}
                <form class="form-horizontal" action="{{route("nieuweReservatieRest")}}" method="post">

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Datum</label>
                        <div class="col-sm-8">

                            <div id="datepicker-container">
                                <div id="datepicker-center">
                                    <div id="datepicker"></div>
                                </div>
                            </div>
                            <!-- Met javascript haal ik de datum uit de DataPicker en steek ik ze in de verborgen input veld-->
                            <input type="hidden" id="datepickerhelper" name="frmReservatieRestDatum" required/>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Aantal personen</label>
                        <div class="col-sm-8">

                            <input class="form-control" type="number" min="1" value="2" max="20" name="frmReservatieRestPersonen" required/>

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-4 control-label">Aankomsttijd</label>
                        <div class="col-sm-8">

                            <input class="form-control" type="time" name="frmReservatieRestTijd" required/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-4 control-label">Voornaam</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="frmReservatieRestVoornaam" placeholder="uw voornaam..." type="text" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Familienaam</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="frmReservatieRestNaam" placeholder="uw familienaam..." type="text" required/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-4 control-label">Telefoonnummer</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="frmReservatieRestTelefoon" placeholder="0488111111" type="tel" required/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                            <input class="form-control"  name="frmReservatieRestEmail" placeholder="uwemail@hotmail.com" type="email" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Opmerkingen</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="frmReservatieRestNota" rows="2" cols="20" required>Speciale wensen, Allergieën, ...</textarea>
                        </div>
                    </div>

                    <div class="form-group" style="text-align: center">

                        <button class="btn btn-default" name="frmReservatieRestSubmit" id="submit">Toevoegen</button>
                    </div>

                    <!-- Beveiliging als iemand uw session key heeft-->
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                </form>
                </div>

            </div>
        </div>
    </div>
    @stop

