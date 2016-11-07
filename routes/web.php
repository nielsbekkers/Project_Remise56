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

Route::get('reservatie','Reservatie_Controller@home');

Route::get('personeel/reservaties','Reservaties_Controller@home');

Route::get('rondleiding','rondleiding_Controller@home');




Route::get('editMenu' , 'Menu_Controller@editMenu');
