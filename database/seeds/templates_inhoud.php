<?php

use Illuminate\Database\Seeder;

class templates_inhoud extends Seeder
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
    }
}
