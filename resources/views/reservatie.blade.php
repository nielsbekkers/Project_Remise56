@extends('layouts.master_layout')

@section('extra_css')
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/reservatiestyle.css">
   <script>
        $( function() {
            // Verbergen
            $("#FrmReservatieGroepUur").hide();
            $("#FrmReservatieGroepPersonen").hide();
            $("#FrmReservatieDeel2").hide();

            //var $j = jQuery.noConflict();
            $( "#datepicker" ).datepicker({
                monthNames: [ "Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December" ],
                dayNames: [ "Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag" ],
                dayNamesMin: [ "Zo", "Ma", "Di", "Wo", "Do", "Vr", "Za" ],
                firstDay: 1, // Maandag
                altField: "#datepickerhelper",
                minDate: 0,
                onSelect: function (date) {
                    //alert(date);
                    // $("#FrmReservatieGroepUur").show();
                    $("#FrmReservatieGroepUur").fadeIn(2000);
                }
            });



            $("#FrmReservatieUur").click(function(){
                $("#FrmReservatieGroepPersonen").fadeIn(2000);
            })

            $("#FrmReservatiePersonen").click(function(){
                $("#FrmReservatieDeel1").fadeOut(2000);
                $("#FrmReservatieDeel2").fadeIn(2000);
            })

        } );


    </script>

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

                {!!html_entity_decode($sContent)!!}

            </div>
        </div>
    </div>
    @stop


{{--<div class="col-md-8">--}}
    {{--<p style="text-align: center">Online Reserveren</p>--}}

    {{--<div class="container">--}}
        {{--<div class="row">--}}

        {{--</div>--}}
    {{--</div>--}}

    {{--<form class="form-horizontal" action="{{route("createReservationClient")}}" method="post">--}}
        {{--<div id="FrmReservatieDeel1">--}}
            {{--<div id="FrmReservatieGroepDatum">--}}
                {{--<label for="sel1">Select datum (select one):</label>--}}
                {{--<é--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<div id="FrmReservatieGroepUur">--}}
                {{--<label for="sel1">Select uur (select one):</label>--}}
                {{--<select id="FrmReservatieUur" class="form-control" id="sel1" style=" text-align-last:center;">--}}
                    {{--<option style=" text-align-last:center;">11.00</option>--}}
                    {{--<option>11.30</option>--}}
                    {{--<option>12.00</option>--}}
                    {{--<option>12.30</option>--}}
                    {{--<option>13.00</option>--}}
                    {{--<option>13.30</option>--}}

                {{--</select>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<div id="FrmReservatieGroepPersonen">--}}
                {{--<label  for="sel1">Select personen (select one):</label>--}}
                {{--<select id="FrmReservatiePersonen" class="form-control" id="sel1" style=" text-align-last:center;">--}}
                    {{--<option style=" text-align-last:center;">1</option>--}}
                    {{--<option>2</option>--}}
                    {{--<option>3</option>--}}
                    {{--<option>4</option>--}}
                {{--</select>--}}
            {{--</div>--}}
            {{--<br>--}}
        {{--</div>--}}

        {{--<div id="FrmReservatieDeel2">--}}
            {{--<form class="form-inline">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" name="FrmReservatieVoornaam" class="form-control" placeholder="Voornaam">--}}
                    {{--<input type="text" name="FrmReservatieNaam" class="form-control" placeholder="Naam">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="email" name="FrmReservatieEmail" class="form-control" placeholder="Email" >--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" name="FrmReservatieTel" class="form-control" placeholder="tel" >--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<textarea class="form-control" name="FrmReservatieNota" rows="2" placeholder="Speciale wensen, Allergieën, ..." cols="20"></textarea>--}}

                {{--</div>--}}

                {{--<button type="submit" name="FrmReservatieSubmit" class="btn btn-default">Reserveren</button>--}}
            {{--</form>--}}

        {{--</div>--}}


        {{--<!-- Beveiliging als iemand uw session key heeft-->--}}
        {{--<input type="hidden" name="_token" value="{{Session::token()}}">--}}
    {{--</form>--}}

{{--</div>--}}

