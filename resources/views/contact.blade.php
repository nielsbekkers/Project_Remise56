@extends('layouts.grand_cafe_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6"><h2><span class="glyphicon glyphicon-time"></span>Openingsuren</h2>
                </br>
                <table class="table">
                    <thead><tr><th>Dag</th><th>Openingsuren</th></tr></thead>
                    <tbody><tr><td>Ma-Vr </td><td> 11u-...</td></tr>
                    <tr><td>Za-Zo </td><td>9u-...</td></tr></tbody>
                </table>
                <p><span class="glyphicon glyphicon-cutlery"></span> In het weekend kan u tussen 9u en 11u komen ontbijten </p></div>
            <div class="col-xs-12 col-md-6">		<h2>Contact</h2>
                <p><span class="glyphicon glyphicon-glass"></span> &nbsp Brouwerij & Grand Caf&#233 </p>
                <p><span class="glyphicon glyphicon-map-marker"></span> &nbsp   Albert I Laan 56</p>
                <p> &nbsp  &nbsp &nbsp B-3582 Koersel</p>
                <p><span class="glyphicon glyphicon-phone"></span> &nbsp 011/183 193</p>
                <p><span class="glyphicon glyphicon-envelope"></span> &nbsp info@remise56.be</p>
                <p><span class="glyphicon glyphicon-bullhorn"></span> Voor feestjes mag U altijd vrijblijvend contact op nemen   </p>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2><span class="glyphicon glyphicon-envelope"></span>Neem vrijblijvend contact op </h2>
                </br>
                </br>
                <div class="inner contact">
                    <div class="contact-form">
                        <form id="contact-us" method="post" action="#">
                            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                                <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                            </div>
                            <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                                <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LeXMgsUAAAAAM1NUMfpHicEn2YxEAYvPZctozQE"></div>

                            <div class="relative fullwidth col-xs-12">
                                <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
                            </div>
                            <div class="clear"></div>
                        </form>
                        <div class="mail-message-area">
                            <div class="alert gray-bg mail-message not-visible-message">
                                <strong>Thank You !</strong> Your email has been delivered.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="g-recaptcha" data-sitekey="6LeXMgsUAAAAAM1NUMfpHicEn2YxEAYvPZctozQE"></div>

            <div class="col-xs-12 col-md-6">
                </br>
                </br>
                <div class="map-responsive">
                    <iframe
                            width="100%"
                            height="450"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCZTf5JiAtJ03siabCXqna5OWQfyBagfng
                            &q=Remise56" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2><span class="glyphicon glyphicon-road"></span> geschatte reistijden: </h2>
                    <table class="table">
                        <thead><tr><th>Stad</th><th>Reistijd</th></tr></thead>
                        <tbody><tr><td>Antwerpen </td><td> 1uur</td></tr>
                        <tr><td>Gent </td><td>1uur 30min</td></tr>
                        <tr><td>Brugge </td><td>2uur</td></tr>
                        <tr><td>Leuven </td><td>45min</td></tr>
                        <tr><td>Bergen </td><td>1uur 50min</td></tr>
                        <tr><td>Luik </td><td>1uur</td></tr>
                        <tr><td>Aarlen </td><td>2uur</td></tr>
                        <tr><td>Namen </td><td>1uur 20min</td></tr>
                        <tr><td>Waver </td><td>1uur5min</td></tr>
                        <tr><td>Brussel </td><td>1uur</td></tr></tbody>
                    </table>
                </div>
            </div>
    </div>
    </div>
@stop