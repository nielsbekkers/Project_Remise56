<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Remise 56 | {{$menuTop}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="brouwerij cafe restaurant koersel" />
    <meta name="keywords" content="brouwerij cafe restaurant koersel" />
    <meta name="author" content="3ICT_Projects2016-2017" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="images/logo_Geen_Tekst.png" type="image/png">

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="../css/simple-line-icons.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="../css/flexslider.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <link rel="stylesheet" href="../css/style.css">

    @yield('extra_css')


    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
    <!-- Jquerry -->
    <script src="../js/jquery.min.js"></script>
    <script>
        $(function(){
            $('#footerClose').on('click', function(){
                $('#footerClose').toggle();
                $('#footerContent').toggle(400);
                $('#footerOpen').toggle();
            });
            $('#footerOpen').on('click', function(){
                $('#footerOpen').toggle();
                $('#footerContent').toggle(400);
                $('#footerClose').toggle();
            });
        });
    </script>

</head>
<body>

<div class="js-sticky">
    <div class="fh5co-main-nav">
        <div class="container-fluid">
            <div class="fh5co-menu-1">
                <a href="{{url('/')}}">Home</a>
                <a href="{{url('menu')}}">Menu</a>
                <a href="{{url('brouwerij')}}" >Brouwerij</a>
            </div>
            <div class="fh5co-logo">
                <a href="{{url('/')}}" style="background-image: url(../images/logo.gif)">Remise 56</a>
            </div>
            <div class="fh5co-menu-2">
                <a href="{{url('foto')}}" >Foto´s</a>
                <a href="{{url('reservatie')}}" >Reservatie</a>
                <a href="{{url('contact')}}" >Contact</a>
            </div>
        </div>

    </div>
</div>

@yield('banner')

@yield('content')


<div class="navbar navbar-reversed navbar-fixed-bottom" id="footer" style="width: 100%;">

    <button id="footerClose" type="button" class="btn btn-default pull-right"  style="margin-right:0px; margin-top:-40px;" aria-label="Center">
        <span class="" aria-hidden="true">&#9660;</span>
    </button>

    <button id="footerOpen" type="button" class="btn btn-default pull-right pull-down"  style="margin-bottom: 0px; margin-right:0px; margin-top:auto;display: none" aria-label="Center">
        <span class="" aria-hidden="true">&#9650;</span>
    </button>

    <div class="container text-footer" style="width: 100%;text-align: center; background: #2f4f4f;opacity:1;background-color: rgba(0,0,0,0.6);  -webkit-transition: max-height 0.5s;
			transition: max-height 0.5s;" id="footerContent">

        <div class="col-md-6">
            <p class="navbar-text pull-left" style="color:white;">Openingsuren: maandag-vrijdag vanaf 11u doorlopend <br>
                zaterdag-zondag vanaf 9u doorlopend, gezellig ontbijten!
            </p>
        </div>

        <div class="col-md-3">
            <a href="tel:011183193" class="btn" style="color:white; margin-top:10%; margin-left: auto; margin-right: auto; text-align:center;">Tel: 011/18 31 93</a>
            </p>
        </div>

        <div class="col-md-3">
            <a href="https://www.facebook.com/Remise56/" target="_blank" class="btn btn-social btn-facebook" style="margin-top:10%; margin-left: auto; margin-right: auto; text-align:center;">Facebook</a>
        </div>

    </div>

</div>
</body>

@yield('extra_scripts')


</html>