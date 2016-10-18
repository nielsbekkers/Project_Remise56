@extends('layout')

@section('content')
    <div class="container">
        <div class="row">



            <div class="col-xs-12 col-md-6"><h2><span class="glyphicon glyphicon-time"></span>Openingsuren</h2>
                </br>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Dag</th>
                        <th>Openingsuren</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Ma-Vr </td>
                        <td> 11u-...</td>
                    </tr>
                    <tr>
                        <td>Za-Zo </td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <p><span class="glyphicon glyphicon-hand-right"></span> In het weekend kan u tussen 9u en 11u komen ontbijten </p></div>

            <div class="col-xs-12 col-md-6">		<h2>Contact</h2>
                <p><span class="glyphicon glyphicon-glass"></span> &nbsp Brouwerij & Grand Caf&#233 </p>
                <p><span class="glyphicon glyphicon-map-marker"></span> &nbsp   Albert I Laan 56</p>
                <p> &nbsp  &nbsp &nbsp B-3582 Koersel</p>
                <p><span class="glyphicon glyphicon-phone"></span> &nbsp 011/183 193</p>
                <p><span class="glyphicon glyphicon-envelope"></span> &nbsp info@remise56.be</p></div>
        </div>
        </br>
        <div class="row">




            <div class="col-xs-12 col-md-6">
                <h2><span class="glyphicon glyphicon-envelope"></span>Neem vrijblijvend contact op </h2>
                </br>
                </br>
                <div class="inner contact">
                    <!-- Form Area -->
                    <div class="contact-form">
                        <!-- Form -->
                        <form id="contact-us" method="post" action="#">
                            <!-- Left Inputs -->
                            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                                <!-- Name -->
                                <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                <!-- Email -->
                                <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                                <!-- Subject -->
                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                            </div><!-- End Left Inputs -->
                            <!-- Right Inputs -->
                            <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                                <!-- Message -->
                                <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                            </div><!-- End Right Inputs -->
                            <!-- Bottom Submit -->
                            <div class="relative fullwidth col-xs-12">
                                <!-- Send Button -->
                                <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
                            </div><!-- End Bottom Submit -->
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>

                        <!-- Your Mail Message -->
                        <div class="mail-message-area">
                            <!-- Message -->
                            <div class="alert gray-bg mail-message not-visible-message">
                                <strong>Thank You !</strong> Your email has been delivered.
                            </div>
                        </div>

                    </div><!-- End Contact Form Area -->
                </div><!-- End Inner -->

            </div>
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
    </div>
    </div>
@stop