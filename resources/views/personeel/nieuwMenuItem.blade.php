@extends('layouts.personeel_layout')

@section('title')
    Remise 56 Dashboard
@endsection

@section('content')

    <div class="row">
        @if(isset($bResult) && $bResult == true)
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Succes,</strong> er is een nieuw menu item toegevoegd.
            </div>

        @elseif(isset($bResult) && $bResult == false)
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Fout! </strong> Geen nieuw menu item toegevoegd.
            </div>
        @endif
        <div class="col-md-2"></div>

            <script>
                $(document).ready(function(){

                    $("#frmGroepSubCatDranken").hide();
                    $("#frmGroepSubCatGerechten").hide();
                    $("#frmGroepInfo").hide();

                    $("#frmNieuwMenuItemCat ").change(function(){

                        $("#frmGroepSubCatDranken").hide();
                        $("#frmGroepSubCatGerechten").hide();

                        if ($("#frmNieuwMenuItemCat option:selected").val() == "DRANKEN"){
                            $("#frmGroepSubCatDranken").show();
                        }
                        else if ($("#frmNieuwMenuItemCat option:selected").val() == "GERECHTEN"){
                            $("#frmGroepSubCatGerechten").show();
                        }

                    });

                    $("#frmNieuwMenuItemSubCatDranken ").change(function(){
                        $("#frmNieuwMenuItemSubCat").val( $("#frmNieuwMenuItemSubCatDranken option:selected").val());

                        $("#frmGroepInfo").show();
                    });

                    $("#frmGroepSubCatGerechten ").change(function(){
                        $("#frmNieuwMenuItemSubCat").val($("#frmNieuwMenuItemSubCatGerechten option:selected").val());
                        $("#frmGroepInfo").show();
                    });
                });

            </script>
        <div class="col-md-8">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nieuw menu item</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal"  action="{{route('nieuwMenuItem')}}" method="post">

                        <div class="form-group" style="padding: 10px;">
                            <label for="frmNieuwMenuItemCat">Kies een categorie:</label>
                            <select class="form-control" id="frmNieuwMenuItemCat" name="frmNieuwMenuItemCat">
                                <option value="kies">Kies een categorie</option>
                                <option value="DRANKEN">DRANKEN</option>
                                <option value="GERECHTEN">GERECHTEN</option>
                            </select>
                        </div>

                        <div class="form-group" style="padding: 10px;" id="frmGroepSubCatDranken">
                            <label for="frmNieuwMenuItemSubCatDranken">Kies een subcategorie:</label>
                            <select class="form-control" id="frmNieuwMenuItemSubCatDranken" >
                                <option value="BIEREN">BIEREN</option>
                                <option value="BUBBELS">BUBBELS</option>
                                <option value="(HUIS)WIJNEN">(HUIS)WIJNEN</option>
                                <option value="STERKE DRANKEN">STERKE DRANKEN</option>
                                <option value="WARME DRANKEN">WARME DRANKEN</option>
                                <option value="APERITIEVEN">APERITIEVEN</option>
                                <option value="FRISDRANKEN">FRISDRANKEN</option>
                                <option value="DIGESTIEVEN">DIGESTIEVEN</option>
                                <option value="GIN TONIC">GIN TONIC</option>
                                <option value="COCKTAILS">COCKTAILS</option>

                            </select>
                        </div>

                        <div class="form-group" style="padding: 10px;" id="frmGroepSubCatGerechten">
                            <label for="frmNieuwMenuItemSubCatGerechten">Kies een subcategorie:</label>
                            <select class="form-control" id="frmNieuwMenuItemSubCatGerechten">
                                <option value="BORRELHAPJES">BORRELHAPJES</option>
                                <option value="SOEPEN">SOEPEN</option>
                                <option value="TOASTS">TOASTS</option>
                                <option value="SALADES">SALADES</option>
                                <option value="VLEESGERECHTEN">VLEESGERECHTEN</option>
                                <option value="VISGERECHTEN/ZEEVRUCHTEN">VISGERECHTEN & ZEEVRUCHTEN</option>
                                <option value="KINDERGERECHTEN">KINDERGERECHTEN</option>
                                <option value="ZOETIGHEDEN">ZOETIGHEDEN</option>
                                <option value="ONTBIJT">ONTBIJT</option>
                            </select>
                        </div>

                        <!-- Hierin komt de waarde van 1 van de 2 select elementen (SubCategorie Dranken of SubCategorie Gerechten-->
                        <input type="hidden" name="frmNieuwMenuItemSubCat" id="frmNieuwMenuItemSubCat"/>

                        <div id="frmGroepInfo">
                        <div class="form-group" style="padding: 10px;">
                            <label for="frmNieuwMenuItemTitel">Geef een titel:</label>
                            <input type="text" class="form-control" id="frmNieuwMenuItemTitel" name="frmNieuwMenuItemTitel" required>
                        </div>


                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group" style="padding: 10px;">
                                    <label for="frmNieuwMenuItemPrijs">Geef een prijs:</label>
                                    <input type="number" class="form-control" id="frmNieuwMenuItemPrijs" min="1" step="0.01"  name="frmNieuwMenuItemPrijs" required>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group" style="padding: 10px;">
                                    <label for="frmNieuwMenuItemZichtbaar" >Zichtbaar in het menu:</label>

                                        <input class="form-control" type="checkbox" value="true" id="frmNieuwMenuItemZichtbaar" name="frmNieuwMenuItemZichtbaar" >

                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="padding: 10px;">
                            <label for="frmNieuwMenuItemBeschrijving">Geef een beschrijving:</label>
                            <textarea class="form-control" rows="5" id="frmNieuwMenuItemBeschrijving" name="frmNieuwMenuItemBeschrijving"> </textarea>
                        </div>

                        <button type="submit" name="frmNieuwMenuItemSubmit" class="btn btn-primary">Toevoegen</button>

                        <!-- Beveiliging als iemand uw session key heeft-->
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                        </div>
                    </form>

                </div>
            </div>





        </div>
        <div class="col-md-2"></div>

    </div>
@endsection