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
    <link rel="shortcut icon" href="../images/logo_Geen_Tekst.png" type="image/png">

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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="js-sticky">
    <div class="fh5co-main-nav">
        <div class="container-fluid">
            <div class="fh5co-menu-1">
                <a href="{{url('personeel/reservaties')}}">Reservaties</a>
                <a href="{{url('personeel/news')}}" >Nieuws Items</a>
            </div>
            <div class="fh5co-logo">
                <a href="{{url('/')}}" style="background-image: url(../images/logo.gif)">Remise 56</a>
            </div>
            <div class="fh5co-menu-2">
                <a href="" >Dummy</a>
                <a href="" >Dummy</a>
                <a href="" >Afmelden</a>
            </div>
        </div>

    </div>
</div>
@yield('content')
</body>

@yield('extra_scripts')
</html>