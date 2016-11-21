@extends('layouts.personeel_layout')

@section('extra_css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
@endsection

@section('content')

<div class="panel panel-default panel-table">
    <div class="panel-heading">
        <div class="row">
            <div class="col col-xs-6">
                <h3 class="panel-title">Actieve nieuws items</h3>
            </div>
            <div class="col col-xs-6 text-right">
                <button type="button" class="btn btn-sm btn-primary btn-create btn-showform" onclick="toggleView()">Maak een nieuws item aan</button>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="center-block">
        <form method="post" id="popup-form" class="center" style="display:none;padding-bottom: 20px;" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label>Titel</label><br/>
            <input type="text" name="titel" class="span3" required/><br/>
            <label>Uitleg</label><br/>
            ​<textarea id="uitleg" name="uitleg" form="popup-form" rows="4" cols="40" required></textarea><br/>
            <label>Afbeelding voor bij de uitleg</label><br/>
            <input type="file" name="foto" accept="image/*"><br/>
            <input type="submit" value="Maak aan" class="btn btn-primary"/>
        </form></div>
        <table class="table table-striped table-bordered table-list">
            <thead>
            <tr>
                <th>Verwijderen</th>
                <th>Titel</th>
                <th>Uitleg</th>
                <th>Foto naam</th>
            </tr>
            </thead>
@foreach($newsItems->all() as $newsItem)
    <tbody>
    <tr>
        <td align="center">
            <a class="btn btn-danger" href="{{url('/personeel/news/deleteNewsItem/'.$newsItem->ID)}}"><em class="fa fa-trash"></em></a>
        </td>
        <td>{{$newsItem->Titel}}</td>
        <td>{{$newsItem->Uitleg}}</td>
        @if($newsItem->padNaarFoto != null)
            <td>{{$newsItem->padNaarFoto}}</td>
        @else
            <td>Er is geen foto toegevoegd</td>
        @endif
    </tr>
    </tbody>
@endforeach
    </div>
</div>
@endsection

@section('extra_scripts')
<script>
    function toggleView(){
        if ($('#popup-form').css('display') == 'block'){
            $('#popup-form').css('display','none');
            $(".btn-showform").html('Maak een nieuws item aan');
            $(".btn-showform").css('background-color','rgb(47,121,185)');
            $(".btn-showform").css('border','1px solid rgb(47,121,185)');
        }else{
            $('#popup-form').css('display','block');
            $(".btn-showform").html('Sluit het formulier');
            $(".btn-showform").css('background-color','red');
            $(".btn-showform").css('border','1px solid red');
        }

    }
</script>
@endsection