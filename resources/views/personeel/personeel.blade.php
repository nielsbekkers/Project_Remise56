@extends('layouts.personeel_layout')

@section('title')
    Remise 56 Dashboard
@endsection

@section('scripts')
    <style>
    .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 5% 0;
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
    }
    .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;
    }
    </style>
@endsection

@section('content')
<script>
    function Wijzig(naam, gebruikersnaam, actief) {
        $(document).ready(function(){

            $('#myModal').modal('show');
            $('#frmHeader').text("Wijzigen van personeel( " + gebruikersnaam+")");
            $('#frmPersoneelNaam').val(naam);
            $('#frmPersoneelGebruikersnaam').val(gebruikersnaam);



            if (actief == true){
                $('#frmPersoneelActief').attr('checked', true);
            }else{
                $('#frmPersoneelActief').attr('checked', false);
            }
        });
    }

</script>
    <div class="row">

        <div class="col-md-2"></div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Personeelsleden</h3>
                </div>
            <div class="panel-body">
            <table class="table table-striped custab">
                <thead>
                <tr>
                    <th>ID</th><!--class="text-center"-->
                    <th>Naam</th>
                    <th>Gebruikersnaam</th>
                    <th>Acces Level</th>
                    <th>Wijzigen</th>
                    <th>Verwijderen</th>
                </tr>
                </thead>

                @if(!empty($aPersoneel))
                    @foreach($aPersoneel as $persoon)
                        <?php //var_dump($persoon);?>
                        <tr>
                            <td><?php echo $persoon->id ;?></td>
                            <td><?php echo $persoon->naam;?></td>
                            <td><?php echo $persoon->gebruikersnaam; ?></td>
                            <td>1 (Personeelslid) </td>
                            <td><a href="#" class="btn btn-warning btn-xs" onclick="Wijzig()"><span class="glyphicon glyphicon-remove"></span> Wijzigen</a></td>
                            <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$persoon->id}}"><span class="glyphicon glyphicon-remove"></span> Verwijderen</button></td>
                        </tr>

                            <!--Modal -->
                            <div id="deleteModal{{$persoon->id}}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4>Personeelslid: <?php echo $persoon->naam ;?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Bent u echt zeker dat u deze werknemer wilt verwijderen?</p>
                                            <p>Deze actie kan niet ongedaan worden!</p>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <a class="btn btn-default" href="{{url('/personeel/verwijderPersoneelsLid/'.$persoon->id)}}">Verwijderen</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    @endforeach
                @else
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Fout! </strong> Geen personeelsleden in het systeem.
                    </div>

                @endif



            </table>
            </div>


        </div>
        <div class="col-md-3"></div>
        </div>

    </div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="frmHeader"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal"  action="{{route('wijzigPersoneel')}}" method="post">
                    <div class="form-group" style="padding: 10px;">
                        <label for="frmPersoneelNaam">Naam:</label>
                        <input type="text" class="form-control" id="frmPersoneelNaam" name="frmWijzigPersoneelNaam" required>
                    </div>


                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group" style="padding: 10px;">
                                <label for="frmPersoneelGebruikersNaam">Geef een prijs:</label>
                                <input type="text" class="form-control" id="frmPersoneelGebruikersNaam"  name="frmWijzigPersoneelGebruikersNaam" required>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label for="frmPersoneelActief" >Actief</label>
                                <input class="form-control" type="checkbox" name="frmWijzigPersoneelActief" id="frmPersoneelActief" checked>
                            </div>
                        </div>
                    </div>


                    <!-- Beveiliging als iemand uw session key heeft-->
                    <input type="hidden" name="_token" value="{{Session::token()}}">

                    <button type="submit" name="frmPersoneelSubmit" class="btn btn-primary">Aanpassen</button>
                </form>
            </div>

        </div>

    </div>
</div>
@endsection