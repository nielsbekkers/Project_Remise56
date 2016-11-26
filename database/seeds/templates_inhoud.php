<?php

use Illuminate\Database\Seeder;

class templates_inhoud extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates_inhoud')->insert([
            'templateNaam' => 'hoofdBlok',
            'templateInhoud' => 'HoofdTitel:<h1>test</h1>;HoofdOmschrijving:<h2>test2</h2>',
        ]);
        DB::table('templates_inhoud')->insert([
            'templateNaam' => 'Geschiedenis',
            'templateInhoud' => 'GeschiedenisTitel:<h1>gesch</h1>;GeschiedenisOmschrijving:<h2>gesch2</h2>',
        ]);
        DB::table('templates_inhoud')->insert([
            'templateNaam' => 'bierTemplate',
            'templateInhoud' => 'Bier1Foto:<img src="'.url('/images/remiseblond2.jpg').'" style="width: 400px; height: 500px" alt="RemiseBlond" class="img-circle"/>;
            Bier1Titel:<h1 class="brouwerijSubTitles">REMISE TRIPEL</h1>;
            Bier1Omschrijving:<p class="sub-heading">Voor onze tripel gebruiken we de beste bleke mouten en bleke kandijsuikers. Hij is met zijn 8.5 % alcohol een ‘stevige blonde’.
                        <br>
                        <br>
                        Een fruitige neus, en een mooie zachte bitterheid, een stroblonde kleur, en een klein toetsje hoparoma,….
                        Ongefilterd en ongepasteuriseerd.
                        <br>
                        <br>

                        Echt een aanrader voor wie houdt van een mooie tripel….
                    </p>
            Bier2Foto:<img src="'.url('images/RemiseDonker.jpg').'" style="width: 400px; height: 500px" alt="RemiseDubbel" class="img-circle" />;
            Bier2Titel:<h2 class="brouwerijSubTitles">REMISE DUBBEL</h2>;
            Bier2Omschrijving:<p class="sub-heading">Voor het brouwen van deze volmondige diepdonkere dubbel gebruiken we speciaal geselecteerde donkere moutsoorten en donkere kandijsuikers.
                        <br />
                        <br />
                        Dit bier van hoge gisting heeft een zachte typerende karameltoets, is volmondig en heeft een diepdonkere warme kleur.
                        <br />
                        <br />
                        Ongefilterd en ongepasteuriseerd.
                        <br />
                        <br />
                        Alcoholpercentage: 7%
                    </p>;
            Bier3Foto:<img src="'.url('/images/remiseblond2.jpg').'" style="width: 400px; height: 500px" alt="RemiseBlond" class="img-circle">;
            Bier3Titel:<h2 class="brouwerijSubTitles">“56” SUPERPILS</h2>;
            Bier3Omschrijving:<p class="sub-heading">Een pils zoals een pils bedoeld is: fris en lichtjes fruitig, supervers, een mooie bitterheid.
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
                    </p>;'
        ]);
    }
}
