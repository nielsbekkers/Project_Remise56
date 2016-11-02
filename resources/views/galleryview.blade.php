<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/lightbox.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    </head>
<body>

<div class="row">
    <div class="col-md-12">
        <h1>{{$gallery->name}}</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <a href="{{url('foto')}}" class="btn btn-primary">Terug</a>
    </div>
</div>
</body>
</html>