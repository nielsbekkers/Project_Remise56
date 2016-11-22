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
            <div class="fh5co-menu-2" style="float: right;">
                <a href="/grandcafe" style="font-weight: bold;">Ga naar Grand Café</a>
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
                <a href="/" style="background-image: url(images/logo.gif)">Remise 56</a>
            </div>
            <div class="fh5co-menu-2" style="float: right;">
                <a href="/brouwerij" style="font-weight: bold;">Ga naar Brouwerij</a>
                <a href="/grandcafe" >Grand Café</a>
                <a href="/grandcafe/menu">Menu</a>
                <a href="/grandcafe/fotos" >Foto´s</a>
                <a href="/grandcafe/reservatie" >Reservatie</a>
                <a href="/grandcafe/contact" >Contact</a>
            </div>
            '
        ;
        return $navigatieItems;
    }


}
