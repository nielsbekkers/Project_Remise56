<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Brouwerij_Model extends Model
{
    public function geefBeginPaginaContent(){
        $content = array(
            'HoofdTitel' => '<h2 class="heading">Brouwerij Remise 56</h2>',
            'HoofdOmschrijving' => '<p class="brouwerijSubHeading">Onze bieren worden getapt uit de grote schenktanks boven de toog. <br>Recht uit de brouwerij, supervers. </p>',
            'GeschiedenisTitel' => '<h2 class="heading">Geschiedenis</h2>',
            'GeschiedenisOmschrijving' => '<p>
                        Dit authentieke pand werd gebouwd in 1907 om dienst te doen als stelplaats voor de locomotieven en de passagiersrijtuigen van de tramlijn Diest - Koersel.
                        Aanvankelijk werd hier de stoomtram gestald (jawel, stoomtram), daarna kwamen de gemotoriseerde rijtuigen.
                        In 1954 werd de tramlijn vervangen door een busdienst, en dus werden hier lijnbussen gestald.
                        <br>
                        <br>
                        Vanaf 2001 stond het gebouw leeg… Enkele jaren geleden leek dit gebouw nog bestemd voor de sloophamer.
                        Maar wij gaven het een grondige facelift, met respect voor de eigenheid en het verleden.
                        <br>
                        <br>
                        En vanaf juni 2016 is hier dus een kleine brouwerij en een grand café gevestigd…..
                        We doopten de brouwerij “Remise 56”.
                        “Remise” is de internationaal gebruikte vakterm voor een stelplaats, 56 is ons …huisnummer.
                    </p>',
            'Bier1Foto' => '<img src="'.url('/images/remiseblond2.jpg').'" style="width: 400px; height: 500px" alt="RemiseBlond" class="img-circle">',
            'Bier1Titel' => '<h1 class="brouwerijSubTitles">REMISE TRIPEL</h1>',
            'Bier1Omschrijving' => '<p class="sub-heading">Voor onze tripel gebruiken we de beste bleke mouten en bleke kandijsuikers. Hij is met zijn 8.5 % alcohol een ‘stevige blonde’.
                        <br>
                        <br>
                        Een fruitige neus, en een mooie zachte bitterheid, een stroblonde kleur, en een klein toetsje hoparoma,….
                        Ongefilterd en ongepasteuriseerd.
                        <br>
                        <br>

                        Echt een aanrader voor wie houdt van een mooie tripel….
                    </p>',
            'Bier2Foto' => '<img src="'.url('images/RemiseDonker.jpg').'" style="width: 400px; height: 500px" alt="RemiseDubbel" class="img-circle" />',
            'Bier2Titel' => '<h2 class="brouwerijSubTitles">REMISE DUBBEL</h2>',
            'Bier2Omschrijving' => '<p class="sub-heading">Voor het brouwen van deze volmondige diepdonkere dubbel gebruiken we speciaal geselecteerde donkere moutsoorten en donkere kandijsuikers.
                        <br />
                        <br />
                        Dit bier van hoge gisting heeft een zachte typerende karameltoets, is volmondig en heeft een diepdonkere warme kleur.
                        <br />
                        <br />
                        Ongefilterd en ongepasteuriseerd.
                        <br />
                        <br />
                        Alcoholpercentage: 7%
                    </p>',
            'Bier3Foto' => '<img src="'.url('/images/remiseblond2.jpg').'" style="width: 400px; height: 500px" alt="RemiseBlond" class="img-circle">',
            'Bier3Titel' => '<h2 class="brouwerijSubTitles">“56” SUPERPILS</h2>',
            'Bier3Omschrijving' => '<p class="sub-heading">Een pils zoals een pils bedoeld is: fris en lichtjes fruitig, supervers, een mooie bitterheid.
                        <br />
                        Een bier voor de kleine en grote dorst. Kortom, een superpils.
                        <br />
                        <br />

                        UNIEK: In onze brouwerij serveren wij u onze pils ongefilterd; daardoor is hij nog heel lichtjes troebel.
                        <br />
                        <br />
                        De “56” Superpils is ongepasteuriseerd en heeft een alcoholpercentage van 5.6%.
                        <br />
                        <br />
                    </p>'
        );
        return $content;
    }
}
