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
//http://ip-webser/ จะแสดง route /
Route::get('/', function () {
   return view('shop/index');
});

//http://ip-webser/it จะแสดง route /it
Route::get('/it', function () {
   echo 'IT, I love you.';
});