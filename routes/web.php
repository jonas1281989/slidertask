<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {       //Route zur Startseite, die nur für Entwickler ist
    return view('welcome');
});
Route::get('/slider', function () { //Route zur Slider-Task Seite ohne Lootbox
    return view('slider');
});

Route::get('/lootbox', function () { //Route zur Slider-Task Seite mit Lootbox
    return view('lootbox');
});

Route::get('/wlootbox', function () {   // Route zur Willkommensseite Slider-Task mit Lootbox
    return view('wlootbox');
});

Route::get('/wslider', function () {    // Route zu Willkommensseite Slider-Task ohne Lootbox
    return view('wslider');
});
