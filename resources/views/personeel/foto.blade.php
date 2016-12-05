@extends('layouts.personeel_layout')

@section('extra_css')
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
@stop

@section('content')
    <br/>
    <div class="row">
            <div class="row col-md-6 col-md-offset-1 custyle">
                    <table class="table table-striped custab">
                        <thead>
                        <tr>
                            <th>Naam</th>
                            <th>Aantal</th>
                            <th class="text-center">Actie</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($galleries as $gallery)
                            <tr>
                                <td>
                                    {{$gallery->name}}
                                </td>
                                <td>
                                    {{ $gallery->images()->count() }}
                                </td>
                                </td>
                                <!--<td><a href="{{'gallery/view/'. $gallery->id}}">view</a></td>-->
                                <td class="text-center"><a href="{{'gallery/view/'. $gallery->id}}"><span class="glyphicon glyphicon-edit"></span> Wijzigen</a> / <a href="{{'gallery/delete/'. $gallery->id}}"><span class="glyphicon glyphicon-edit"></span> Verwijderen</a></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


        <div class="col-md-4">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="row col-md-6 col-md-offset-1 custyle">
            <hr/>
            <h3>&nbsp;&nbsp;Toevoegen Gallerij</h3>
            <form id="toevoegenGallery" method="post" action="{{url('gallery/save')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="text" name="gallery_name"
                           id="gallery_name" placeholder="Naam"
                           class="inputGalleryName"
                           value="{{old('gallery_name')}}"
                />
                <button class="btn btn-primary"><i class="glyphicon glyphicon-arrow-right">Voeg Gallerij toe</i></button>
            </form>
        </div>
    </div>

@stop

@section('extra_scripts')
    <script src="{{url('js/lightbox-plus-jquery.js')}}"></script>
@stop
