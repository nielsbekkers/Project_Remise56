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
                            <th class="text-center">Wijzigen</th>
                            <th class="text-center">Verwijderen</th>
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
                                <td class="text-center"><a type="button" class="btn btn-warning btn-xs" href="{{'gallery/view/'. $gallery->id}}"><span class="glyphicon glyphicon-remove"></span> Wijzigen</a></td>
                                <td class="text-center"><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$gallery->id}}"><span class="glyphicon glyphicon-remove"></span> Verwijderen</button></td>

                            </tr>

                            <!--Modal -->
                            <div id="deleteModal{{$gallery->id}}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4>Gallerij: <?php echo $gallery->name ;?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bent u echt zeker dat u deze gallerij wilt verwijderen?</p>
                                            <p>Als u deze gallerij verwijderd, dan worden ook alle onderliggende media verwijderd</p>
                                            <p>Deze actie kan niet ongedaan worden!</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <a class="btn btn-default" href="{{'gallery/delete/'. $gallery->id}}">Verwijderen</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
