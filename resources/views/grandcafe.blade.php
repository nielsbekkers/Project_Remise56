@extends('layouts.master_layout')

@section('banner')
    <div class="row">
        <div width="100%" height="400px;" style="width:100%;height:400px;background-position:center;background-image:url({{url('images/ketel1.jpg')}});margin-top:5px;background-repeat:no-repeat;background-size:cover;">
        </div>
    </div>
@stop


<!-- CONTENT van grandcafé zet je hierin opgehaald uit het model -->


@section('content')
    <div style="background-color: #fafafa;">
        <div class="container" style="padding-top: 40px;">
            <div class="row fh5co-heading row-padded text-center">
                <div class="col-md-12">
                    {!! $aContent['HoofdTitel'] !!}
                    {!! $aContent['HoofdOmschrijving'] !!}

                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container" style="padding-top: 40px;">
            <div class="row fh5co-heading row-padded text-center">
                <div class="col-md-6">
                    {!! $aContent['Foto'] !!}
                </div>
                <div class="col-md-6">
                    {!! $aContent['Omschrijving'] !!}
                </div>
            </div>
        </div>
    </div>



    </div>


    <div style="background-color: #fafafa;">
        <div class="container" style="padding-top: 40px;">
            <div class="row fh5co-heading row-padded text-center">
                <div class="col-md-12">
                    {!! $aContent['GeschiedenisTitel'] !!}
                    {!! $aContent['GeschiedenisOmschrijving'] !!}
                </div>
            </div>
        </div>
@stop