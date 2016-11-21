@extends('layouts.master_layout')

@section('content')
    <div class="container">

        <div class="row fh5co-heading row-padded text-center">
            <div class="col-md-12">
                <h2 class="heading">Reserveer uw rondleiding.</h2>
                <p>Bij ons kan u elke zaterdag, zondag en feestdag terecht voor een rondleiding in onze brouwerij en dit telkens om 15 uur. </br>
                    Een leuk uitstapje met historische uitleg en 2 consumpties inbegrepen. Het tarief bedraagd €8 per persoon. </br>
                    Iedereen welkom, grotere groepen (25+ personen) kunnen telefonisch reserveren met een telefoontje naar
                    <a href="tel:011183193">011/18 31 93</a>
                </p>
            </div>
        </div>

        <div class="row fh5co-heading row-padded text-center">

            <div class="col-xs-12 col-md-6">
                <form>
                    <fieldset>
                        <legend>Reservatie:</legend>
                        <table>
                            <tr>
                                <td><label>Voornaam: </label></td>
                                <td><input type="text" name="name" id="name" required="required"/></td>
                            </tr>
                            <tr>
                                <td><label>Familienaam: </label></td>
                                <td><input type="text" name="surname" id="surname" required="required"/></td>
                            </tr>
                            <tr>
                                <td><label>Telefoonnummer: </label></td>
                                <td><input type="tel" name="phone" id="phone" required="required"/></td>
                            </tr>
                            <tr>
                                <td><label>Email: </label></td>
                                <td><input type="email" name="mail" id="mail" required="required"/></td>
                            </tr>
                            <tr>
                                <td><label>Aantal personen: </label></td>
                                <td>
                                    <select name="persons" id="persons">
                                        <option>1 persoon</option>
                                        <option>2 personen</option>
                                        <option>3 personen</option>
                                        <option>4 personen</option>
                                        <option>5 personen</option>
                                        <option>6 personen</option>
                                        <option>7 personen</option>
                                        <option>8 personen</option>
                                        <option>9 personen</option>
                                        <option>10 personen</option>
                                        <option>11 personen</option>
                                        <option>12 personen</option>
                                        <option>13 personen</option>
                                        <option>14 personen</option>
                                        <option>15 personen</option>
                                        <option>16 personen</option>
                                        <option>17 personen</option>
                                        <option>18 personen</option>
                                        <option>19 personen</option>
                                        <option>20 personen</option>
                                        <option>21 personen</option>
                                        <option>22 personen</option>
                                        <option>23 personen</option>
                                        <option>24 personen</option>
                                        <option>25 personen</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Kies een zaterdag, </br> zondag of feestdag: </label></td>
                                <td><input type="date" name="date" id="date" required="required"/></td>
                            </tr>
                            <tr>
                                <td colspan="2"><button>Bevestigen reservatie</button></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>

            </div>

            <div class="col-xs-12 col-md-6">
                <p><span class="glyphicon glyphicon-glass"></span> &nbsp Brouwerij & Grand Caf&#233 </p>
                <p><span class="glyphicon glyphicon-map-marker"></span> &nbsp Albert I Laan 56</p>
                <p> &nbsp  &nbsp &nbsp B-3582 Koersel</p>
                <p><span class="glyphicon glyphicon-phone"></span> &nbsp <a href="tel:011183193">011/18 31 93</a></p>
            </div>

        </div>

    </div>
@stop