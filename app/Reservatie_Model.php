<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservatie_Model extends Model
{
    public function geefContentBrouwerijReservatie(){
        $content = array(
            'HoofdTitel' => '<h2 class="heading">Reservatie</h2>',
            'HoofdOmschrijving' => '<p>Vanaf 2016 is ons restaurant enkel geopend voor de lunch op vrijdagmiddag en voor diner op vrijdag en zaterdag.
                        Uitzonderingen hierop zijn :11,12 en 13 oktober zijn wij uitzonderlijk geopend voor het diner en dit voor een drie, vier of vijfgangenmenu vanaf 40 euro*Donderdag 10 november (wij serveren het 6g maandmenu puur natuur)
                    </p>',
            'SluitingsTijden' =>'<ul>
                        <li>Zondag 1 januari t/m donderdag 19 januari</li>
                        <li>Zondag 1 januari t/m donderdag 19 januari</li>
                        <li>Zondag 2 juli t/m woensdag 19 juli</li>
                    </ul>'
        );

        return $content;
    }

    public function geefContentGrandCafeReservatie(){
        $content = array(
            'HoofdTitel' => '<h2 class="heading">Reservatie</h2>',
            'HoofdOmschrijving' => '<p>Vanaf 2016 is ons restaurant enkel geopend voor de lunch op vrijdagmiddag en voor diner op vrijdag en zaterdag.
                            Uitzonderingen hierop zijn :11,12 en 13 oktober zijn wij uitzonderlijk geopend voor het diner en dit voor een drie, vier of vijfgangenmenu vanaf 40 euro*Donderdag 10 november (wij serveren het 6g maandmenu puur natuur)
                        </p>',
            'SluitingsTijden' =>'<ul>
                            <li>Zondag 1 januari t/m donderdag 19 januari</li>
                            <li>Zondag 1 januari t/m donderdag 19 januari</li>
                            <li>Zondag 2 juli t/m woensdag 19 juli</li>
                        </ul>'
        );

        return $content;
    }
}
