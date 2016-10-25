

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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style>
        .button {
            border-radius: 15px;
            background-color: transparent;
            border : 1px solid white;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            position: absolute;
            opacity: 0;
            top: 0;
            transition: 0.5s;
        }

        .button:hover {
            /*opacity: 0.4;*/
            background-color: rgba(245, 196, 91, 0.3) !important;
            color:white;
            /*border: 1px solid black;*/
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }

        .pullright{
            float:right;
        }
    </style>
</head>
<body>

<div id="fh5co-container">
    <div id="fh5co-home" class="js-fullheight" data-section="home">

        <div class="flexslider">

            <div class="fh5co-overlay"></div>
            <div class="fh5co-text">
                <div class="container">
                    <div class="row">
                        <h1 class="to-animate" style="font-size: 200px;">Remise 56</h1>
                        <hr class="hidden-sm hidden-xs">
                        <div class="container-fluid">
                            <div class="fh5co-menu-1">
                                <a href="{{url('brouwerij')}}" class="button col-lg-2 hidden-sm hidden-xs Brouwerij"><span>Brouwerij </span></a>
                                <a href="#" class="button col-lg-2 hidden-sm hidden-xs pullright GC"><span>Grand Café </span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="slides">
                <li id="achtergrond" style="background-image: url(images/slide3.jpg);"></li>
                <li id="achtergrondgc" style="background-image: url(images/slide2.jpg);"></li>
                <li id="achtergrondb" style="background-image: url(images/ketel1.jpg);"></li>
            </ul>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script>
        $(".Brouwerij").hover(function(){

            var index = $('#achtergrondb').index();   // will give you 2
            $('.flexslider').flexslider(index);   // will take you to that slide
        },function() {
            var index = $('#achtergrond').index();   // will give you 2
            $('.flexslider').flexslider(index);   // will take you to that slide
        });

        $(".GC").hover(function(){
            var index = $('#achtergrondgc').index();   // will give you 2
            $('.flexslider').flexslider(index);   // will take you to that slide
        },function() {
            var index = $('#achtergrond').index();   // will give you 2
            $('.flexslider').flexslider(index);   // will take you to that slide
        });

    $(window).load(function() {
        $("#achtergrondb").css('opacity' , 0);
        $("#achtergrondgc").css('opacity' , 0);
        jQuery('.flexslider').flexslider("pause");
    });

    </script>
<!-- jQuery -->

<!-- jQuery Easing -->

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Bootstrap DateTimePicker -->
<script src="js/moment.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>

<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<script>
    $(function () {
        $('#date').datetimepicker();
    });
</script>
<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>

