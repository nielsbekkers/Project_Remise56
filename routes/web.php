<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', 'Home_Controller@home');

Route::get('menu','Menu_Controller@home');



Route::get('reservatie','Reservatie_Controller@getContent');

Route::get('rondleiding','rondleiding_Controller@home');

Route::get('editMenu' , 'Menu_Controller@editMenu');

Route::post('/createReservationClient', [
    'uses' => 'Reservation_Controller@createReservationClient',
    'as' => 'createReservationClient'
]);

//////GrandCafe//////
Route::get('/grandcafe/{paginaNaam}', 'GrandCafe_Controller@getPagina');
Route::get('/grandcafe', 'GrandCafe_Controller@getPagina');
Route::post('/grandcafe/nieuweReservatieRestKlant', [
    'uses' => 'GrandCafe_Controller@nieuweReservatie',
    'as' => 'nieuweReservatieRestKlant'
]);




//////// BROUWERIJ /////////
Route::get('/brouwerij', 'Brouwerij_Controller@getPagina');
Route::get('/brouwerij/{paginaNaam}', 'Brouwerij_Controller@getPagina');

////////Gallerij////////

Route::get('foto','Foto_Controller@home');
Route::get('gallery/list','Personeel_Controller@viewGalleryList');
Route::post('gallery/save','Personeel_Controller@saveGallery');
Route::get('personeel/gallery/view/{id}','Personeel_Controller@viewGalleryPics');
Route::post('image/do-upload','Personeel_Controller@doImageUpload');
Route::get('personeel/gallery/delete/{id}', 'Personeel_Controller@deleteGallery');


//////////////// Personeel

// DASHBOARD get pagina -> Personeel_Controller
Route::get('/personeel/{paginaNaam}', 'Personeel_Controller@getPagina');
Route::get('/personeel', 'Personeel_Controller@getHome');



// Dashboard Nieuwe reservatie restaurant form POST
Route::post('/personeel/nieuweReservatieRest', [
    'uses' => 'Personeel_Controller@nieuweReservatieRest',
    'as' => 'nieuweReservatieRest'
]);

// Dashboard Nieuwe rondleiding restaurant form POST
Route::post('/personeel/nieuweReservatieRond', [
    'uses' => 'Personeel_Controller@nieuweReservatieRond',
    'as' => 'nieuweReservatieRond'
]);


// Dashboard Nieuw personeelslid form POST
Route::post('/personeel/nieuwPersoneelsLid', [
    'uses' => 'Personeel_Controller@nieuwPersoneelsLid',
    'as' => 'nieuwPersoneelsLid'
]);

// Dashboard Verwijderen reservatie POST
Route::get('/personeel/verwijderReservatie/{reservatieId}', [
        'uses' => 'Personeel_Controller@verwijderReservatie',
        'as' => 'verwijderReservatie'
        ]);

//Dashboad NEWS ITEMS
Route::get('/personeel/news','NewsItems_Controller@home');

//Dashboard ADD NEWS ITEM
Route::post('/personeel/nieuweNieuwsItem', [
    'uses' => 'Personeel_Controller@nieuweNieuwsItem',
    'as' => 'nieuweNieuwsItem'
]);

//Dashboard DELETE NEWS ITEM
Route::get('/personeel/news/deleteNewsItem/{id}', 'Personeel_Controller@verwijderNieuwsItem');


Route::get('/personeel/news', 'Personeel_Controller@nieuwsItems');

Route::post('/personeel/news/updateNewsItem', [
    'uses'=>'Personeel_Controller@aanpassenNieuwsItem',
    'as'=>'aanpassenNieuwsItem'
]);

// Dashboard Nieuwe menu item form POST
Route::post('/personeel/nieuwMenuItem', [
    'uses' => 'Personeel_Controller@nieuwMenuItem',
    'as' => 'nieuwMenuItem'
]);
// Dashboard Wijzig menu item form POST
Route::post('/personeel/wijzigMenuItem', [
    'uses' => 'Personeel_Controller@wijzigMenuItem',
    'as' => 'wijzigMenuItem'
]);

//Verwijderen van een menuItem
Route::get('/personeel/deleteMenuItem/{id}', 'Personeel_Controller@verwijderMenuItem');

// Bevestigen van een reservatie

Route::get('/bevestig/reservatie/{bevestigingsCode}', 'Bevestigings_Controller@bevestig');

// Dashboard Nieuwe menu item form POST
Route::post('/personeel/nieuwMenuItem', [
    'uses' => 'Personeel_Controller@nieuwMenuItem',
    'as' => 'nieuwMenuItem'
]);
// Dashboard Wijzig menu item form POST
Route::post('/personeel/wijzigMenuItem', [
    'uses' => 'Personeel_Controller@wijzigMenuItem',
    'as' => 'wijzigMenuItem'
]);

//Dashboard voor personeelsleden
Route::get('/personeel/personeel', 'Personeel_Controller@getPersoneel');

Route::get('/personeel/verwijderPersoneelsLid/{id}', 'Personeel_Controller@verwijderPersoneelsLid');
