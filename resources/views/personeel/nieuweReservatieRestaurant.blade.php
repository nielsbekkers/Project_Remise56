@extends('layouts.personeel_layout')

@section('scripts')

    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                inline: true,
                dateFormat: 'yy-mm-dd',
                monthNames: [ "Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December" ],
                dayNames: [ "Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag" ],
                dayNamesMin: [ "Zo", "Ma", "Di", "Wo", "Do", "Vr", "Za" ],
                firstDay: 1, //maandag
                altField: "#datepickerhelper",
                minDate: 0
            });

        } );
    </script>
@endsection

@section('content')

    <div class="row">


        <div class="col-md-12" style="text-align: center">
            @if(isset($bResult) && $bResult == true)
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Succes! </strong> nieuwe reservatie toegevoegd!.
                </div>

            @elseif(isset($bResult) && $bResult == false)
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Fout! </strong> Geen nieuwe reservatie toegevoegd.
                </div>
            @endif

            <h2 style="text-align: center">Nieuwe reservatie (Restaurant)</h2>
                <br><br>

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
                        <input type="hidden" id="datepickerhelper" name="frmReservatieRestDatum"/>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Aantal personen</label>
                    <div class="col-sm-8">

                        <input class="form-control" type="number" min="1" value="2" max="20" name="frmReservatieRestPersonen"/>

                    </div>
                </div>




                <div class="form-group">
                    <label class="col-sm-4 control-label">Aankomsttijd</label>
                    <div class="col-sm-8">

                        <input class="form-control" type="time" name="frmReservatieRestTijd" />
                    </div>
                </div>


               {{-- <div class="form-group">
                    <label class="col-sm-4 control-label">Type</label>
                    <div class="col-sm-8">
                        <input class="radio-inline"  type="radio" name="frmReservatieRestType" value="person" checked /> Persoonlijk<br>
                        <input class="radio-inline" type="radio" name="frmReservatieRestType" value="company"/> Bedrijf
                    </div>


                </div>--}}


                <div class="form-group">
                    <label class="col-sm-4 control-label">Voornaam</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="frmReservatieRestVoornaam" placeholder="uw voornaam..." type="text"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Familienaam</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="frmReservatieRestNaam" placeholder="uw familienaam..." type="text"/>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-4 control-label">Telefoonnummer</label>
                    <div class="col-sm-8">
                        <input class="form-control" name="frmReservatieRestTelefoon" placeholder="0488111111" type="tel"/>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-8">
                        <input class="form-control"  name="frmReservatieRestEmail" placeholder="uwemail@hotmail.com" type="email"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Opmerkingen</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="frmReservatieRestNota" rows="2" cols="20">Speciale wensen, Allergieën, ...</textarea>
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
@endsection



