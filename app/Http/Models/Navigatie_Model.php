<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Navigatie_Model extends Model
{


    public function geefNavigatieBrouwerij(){
        $navigatieItems =
            '
            <div class="fh5co-logo">
                <a href="/" style="background-image: url(images/logo.gif)">Remise 56</a>
            </div>
            <div class="fh5co-menu-1">
                <a href="grandcafe" style="font-weight: bold;">Ga naar Grand Café</a>
                <a href="/brouwerij" >Brouwerij</a>
                <a href="/brouwerij/gallerij" >Foto´s</a>
                <a href="/brouwerij/rondleiding" >Rondleidingen</a>
                <a href="/brouwerij/contact" >Contact</a>
            </div>
            '
        ;
        return $navigatieItems;
    }


    public function geefNavigatieGrandCafe(){
        $navigatieItems =
            '
            <div class="fh5co-logo">
                <a href="{{url(\'/\')}}" style="background-image: url(images/logo.gif)">Remise 56</a>
            </div>
            <div class="fh5co-menu-1">
                <a href="{{url(\'brouwerij\')}}" style="font-weight: bold;">Ga naar Brouwerij</a>
                <a href="{{url(\'grandCafe\')}}" >Grand Café</a>
                <a href="{{url(\'menu\')}}">Menu</a>
                <a href="{{url(\'foto\')}}" >Foto´s</a>
                <a href="{{url(\'rondleiding\')}}" >Rondleiding</a>
                <a href="{{url(\'contact\')}}" >Contact</a>
            </div>
            '
        ;
        return $navigatieItems;
    }


}
