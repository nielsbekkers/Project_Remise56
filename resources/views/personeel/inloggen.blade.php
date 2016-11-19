@extends('layouts.dashboard')

@section('title')
    Remise 56 Dashboard
@endsection

@section('content')

    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Inloggen</h3>
            <form action="{{route('signin')}}" method="post">
                <div class="form-group">
                    <label for="email">Uw email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="password">Uw wachtwoord</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>

                <button type="submit" class="btn btn-primary">Aanmelden</button>

                <!-- Beveiliging als iemand uw session key heeft-->
                <input type="hidden" name="_token" value="{{Session::token()}}">

            </form>
        </div>

        <div class="col-md-3"></div>
    </div>
@endsection