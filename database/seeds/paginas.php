<?php

use Illuminate\Database\Seeder;

class paginas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paginas')->insert([
            'id' => 5,
            'paginaNaam' => 'brouwerij',
            'templates' => '',
            'master' => 'brouwerij'
        ]);
        DB::table('paginas')->insert([
            'id' => 6,
            'paginaNaam' => 'grandcafe',
            'templates' => '',
            'master' => 'grandcafe'
        ]);
        DB::table('paginas')->insert([
            'id' => 7,
            'paginaNaam' => 'menu',
            'templates' => '',
            'master' => 'grandcafe'
        ]);
        DB::table('paginas')->insert([
            'id' => 10,
            'paginaNaam' => 'media',
            'templates' => '',
            'master' => 'alle'
        ]);
        DB::table('paginas')->insert([
            'id' => 11,
            'paginaNaam' => 'rondleiding',
            'templates' => 'hoofdBlok;Geschiedenis',
            'master' => 'brouwerij'
        ]);
        DB::table('paginas')->insert([
            'id' => 15,
            'paginaNaam' => 'reservatie',
            'templates' => '',
            'master' => 'grandcafe'
        ]);
        DB::table('paginas')->insert([
            'id' => 1000,
            'paginaNaam' => 'contact',
            'templates' => 'contactGegevens;reistijden',
            'master' => 'alle'
        ]);
    }
}
