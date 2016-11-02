@extends('layouts.grand_cafe_layout')

@section('extra_css')
    <link href="css/lightbox.min.css" rel="stylesheet">

@stop

@section('content')

    <h1> Media </h1>
    <div class="row">

        <div class="col-md-8">
            Lijst zal hier komen
        </div>

        <div class="col-md-4">
            <form class="form" method="post" action="{{url('gallery/save')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                    <input type="text" name="gallery_name"
                           id="gallery_name" placeholder="Name of the gallery"
                           class="form-control"/>
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>



@stop

@section('extra_scripts')
    <script src="js/lightbox-plus-jquery.js"></script>
@stop
