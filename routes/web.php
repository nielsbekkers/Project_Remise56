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

Route::get('brouwerij','Brouwerij_Controller@home');

Route::get('menu','Menu_Controller@home');

Route::get('contact','Contact_Controller@home');

Route::get('foto','Foto_Controller@home');

Route::get('gallery/list','Foto_Controller@viewGalleryList');

Route::post('gallery/save','Foto_Controller@saveGallery');

Route::get('gallery/view/{id}','Foto_Controller@viewGalleryPics');

Route::post('image/do-upload','Foto_Controller@doImageUpload');

Route::get('reservatie','Reservatie_Controller@getContent');

Route::get('rondleiding','rondleiding_Controller@home');




Route::get('editMenu' , 'Menu_Controller@editMenu');

Route::post('/createReservationClient', [
    'uses' => 'Reservation_Controller@createReservationClient',
    'as' => 'createReservationClient'
]);

//////////////// Personeel

// Dashboard SIGN IN
Route::get('/personeel', function () {
    return view('personeel.signin');
});

// Dashboard SIGN IN form POST
Route::post('/personeel/signin', [
    'uses' => 'Admin_Controller@postSignIn',
    'as' => 'signin'
]);



// Dashboard NEW USER
Route::get('/personeel/newUser', function(){
    return view('personeel.newuser');
});

// Dashboard NEW USER form POST
Route::post('/personeel/newUser', [
    'uses' => 'Admin_Controller@postNewUser',
    'as' => 'newUser'
]);



// Dashboard NEW RESERVATION
Route::get('personeel/reservation','Reservaties_Controller@home');

// Dashboard NEW RESERVATION  form POST
Route::post('/personeel/createReservationAdmin', [
    'uses' => 'Reservation_Controller@createReservationAdmin',
    'as' => 'createReservationAdmin'
]);

