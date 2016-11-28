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




//////// BROUWERIJ /////////
Route::get('/brouwerij', 'Brouwerij_Controller@getPagina');
Route::get('/brouwerij/{paginaNaam}', 'Brouwerij_Controller@getPagina');

////////Gallerij////////

Route::get('foto','Foto_Controller@home');

Route::get('gallery/list','Foto_Controller@viewGalleryList');

Route::post('gallery/save','Foto_Controller@saveGallery');

Route::get('brouwerij/gallery/view/{id}','Foto_Controller@viewGalleryPics');

Route::post('image/do-upload','Foto_Controller@doImageUpload');

Route::get('gallery/delete/{id}', 'Foto_Controller@deleteGallery');


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

// Dashboard Verwijderen reservatie POST
Route::get('/personeel/verwijderReservatie/{reservatieId}', [
    'uses' => 'Personeel_Controller@verwijderReservatie',
    'as' => 'verwijderReservatie'
]);

// Dashboard Nieuw personeelslid form POST
Route::post('/personeel/nieuwPersoneelsLid', [
    'uses' => 'Personeel_Controller@nieuwPersoneelsLid',
    'as' => 'nieuwPersoneelsLid'
]);


//Dashboad NEWS ITEMS
Route::get('/personeel/news','NewsItems_Controller@home');

//Dashboard ADD NEWS ITEM
Route::post('/personeel/news',[
    'uses'=> 'NewsItems_Controller@createNewsItem',
    'as' => 'createNewsitem']);

//Dashboard DELETE NEWS ITEM
Route::get('/personeel/news/deleteNewsItem/{id}', 'NewsItems_Controller@deleteNewsItem');
