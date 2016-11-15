<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    @yield('extra_css')
</head>
<body>

{{--@include('includes.header')--}}
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Remise 56 Dashboard</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nieuw... <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/personeel/newUser">Nieuwe gebruiker</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/personeel/reservation">Nieuwe reservatie(restaurant)</a></li>
                            <li><a href="/personeel/reservation">Nieuwe reservatie(rondleiding)</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/">Nieuw menu item</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/">Nieuw nieuws item</a></li>

                        </ul>
                    </li>

                    <li><a href="#">Personeel</a></li>
                    <li><a href="/personeel/reservaties">Reservaties</a></li>
                    <li><a href="/personeel/news">Nieuws items</a></li>
                    <li><a href="#">Menu items</a></li>
                    <li><a href="/">Inloggen</a></li>
                    <li><a href="#">Uitloggen</a></li>


                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>



<div class="container">
    @yield('content')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
@yield('extra_scripts')
</body>
</html>
