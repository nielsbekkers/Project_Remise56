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
                <div class="col-md-3">
                    <p>Sluitingsperiodes 2016 <br>                                </p>

                    <ul>
                        <li>Zondag 1 januari t/m donderdag 19 januari</li>
                        <li>Zondag 1 januari t/m donderdag 19 januari</li>
                        <li>Zondag 2 juli t/m woensdag 19 juli</li>
                    </ul>

                </div>
                <div class="col-md-6">
                    <p>Online reserveren</p>
                    <form>
                        <fieldset>
                            <legend>Deel 1</legend>

                            <table style="width:500px;">
                                <tr>
                                    <td><label>Reserveren bij</label></td>
                                    <td><label><strong>Remise 56</strong></label>

                                </tr>
                                <tr>
                                    <td><label>Aantal personen</label></td>
                                    <td><select>
                                            <!--<option>Kies het aantal personen</option>-->
                                            <option>1 persoon</option>
                                            <option>2 personen</option>
                                            <option>3 personen</option>
                                            <option>4 personen</option>
                                            <option>5 personen</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Datum</label></td>
                                    <td><input type="date"/></td>

                                </tr>
                                <tr>
                                    <td><label>Aankomstuur</label></td>
                                    <td><select>
                                            <option>Kies een uur</option>
                                            <option>12.00</option>
                                            <option>12.30</option>
                                            <option>17.15</option>
                                            <option>20.00</option>
                                            <option>20.30</option>
                                        </select></td>

                                </tr>
                                <tr>

                                    <td colspan="2"><button>Volgende</button></td>

                                </tr>
                            </table>
                        </fieldset>

                    </form>
                    <br><br><br>
                    <form>

                        <fieldset>
                            <legend>Deel 2</legend>

                            <table style="width:500px;">
                                <tr>
                                    <td><label>Type</label></td>
                                    <td><input type="radio" name="type" value="Persoonlijk"> Persoonlijk<br>
                                        <input type="radio" name="type" value="Bedrijf"> Bedrijf
                                    </td>

                                </tr>
                                <tr>
                                    <td><label>Voornaam</label></td>
                                    <td><input type="text"/> </td>
                                </tr>
                                <tr>
                                    <td><label>Familienaam</label></td>
                                    <td><input type="text"/></td>

                                </tr>
                                <tr>
                                    <td><label>Telefoonnummer</label></td>
                                    <td><input type="tel"/></td>

                                </tr>
                                <tr>
                                    <td><label>Email</label></td>
                                    <td><input type="email"/></td>

                                </tr>
                                <tr>
                                    <td><label>Opmerkingen</label></td>
                                    <td><textarea rows="2" cols="20">Speciale wensen, Allergieën, ...</textarea></td>

                                </tr>
                                <tr>

                                    <td colspan="2"><button>Bevestigen</button></td>

                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-3">
                    <p>Openingsuren 2016</p>
                    <ul>
                        <li> ma, di, wo, do, vr : Vanaf 11u doorlopend open.</li>
                        <li>za, zo : Vanaf 09u doorlopend open.</li>
                    </ul>

                </div>


            </div>
            <div class="row fh5co-heading row-padded text-center">
                <div class="col-md-12">
                    <div class="fb-page" data-href="https://www.facebook.com/Remise56/?fref=ts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Remise56/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Remise56/?fref=ts">Remise 56</a></blockquote></div>

                </div>


            </div>
        </div>
    </div>

    @stop
