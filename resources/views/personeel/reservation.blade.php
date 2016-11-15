@extends('layouts.dashboard')

@section('content')

    <div class="row">


        <div class="col-md-12" style="text-align: center">

            <h2 style="text-align: center">Nieuwe reservatie</h2>

            <form class="form-horizontal" action="{{route("createReservationAdmin")}}" method="post">

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
                        <textarea class="form-control" name="frmReservationNotes" rows="2" cols="20">Speciale wensen, Allergieën, ...</textarea>
                    </div>
                </div>

                <div class="form-group" style="text-align: center">

                    <button class="btn btn-default" name="frmReservationSubmit" id="submit">Bevestigen</button>
                </div>

                <!-- Beveiliging als iemand uw session key heeft-->
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>

        </div>



    </div>
@endsection



