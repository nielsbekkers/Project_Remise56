@extends('layouts.dashboard')

@section('title')
    Remise 56 Dashboard
@endsection

@section('content')

    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <h2 style="text-align: center">Nieuwe gebruiker</h2>
            <form class="form-horizontal"  action="{{route('newUser')}}" method="post">

                <div class="form-group">
                    <label for="email" >Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="first_name" >Naam</label>
                    <input class="form-control" type="text" name="name" id="first_name">
                </div>

                <div class="form-group">
                    <label for="password" >Wachtwoord</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>

                <button type="submit" class="btn btn-primary">Registreren</button>

                <!-- Beveiliging als iemand uw session key heeft-->
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>



        </div>
        <div class="col-md-3"></div>

    </div>
@endsection