@extends('layout')

@section('extra_css')
    <link href="css/lightbox.min.css" rel="stylesheet">

@stop

@section('content')

    <h1>
        Foto's
    </h1>
    <div class="col-xs-12 col-md-6">
        <table>
            <tr>
                <td>
                    <a href="images/foto1.jpg" data-lightbox="roadtrip" data-title="test">
                        <img src="images/foto1.jpg" height="200px" width="200px" alt="pic">
                    </a>
                </td>
                <td>
                    <a href="images/foto2.jpg" data-lightbox="roadtrip" data-title="test">
                        <img src="images/foto2.jpg" height="200px" width="200px" alt="pic" >
                    </a>
                </td>
                <td>
                    <a href="images/foto3.jpg" data-lightbox="roadtrip" data-title="test">
                        <img src="images/foto3.jpg" height="200px" width="200px" alt="pic">
                    </a>
                </td>
                <td>
                    <a href="images/foto4.jpg" data-lightbox="roadtrip" data-title="test">
                        <img src="images/foto4.jpg" height="200px" width="200px" alt="pic">
                    </a>
                </td>

            </tr>
        </table>

    </div>


@stop

@section('extra_scripts')
    <script src="js/lightbox-plus-jquery.js"></script>
@stop
