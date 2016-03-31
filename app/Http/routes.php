<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Homecontroller@index');
Route::get('/Whoweare', 'Homecontroller@whWeAre');
Route::get('/WhatWeDo', 'Homecontroller@whatWedo');
Route::get('/howWedo', 'Homecontroller@howWedo');
Route::get('/contact', 'Homecontroller@contactUs');


#auth Routes




