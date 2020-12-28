<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PageController@index')
       ->name('home');

// Route::get('/country','CountryController@index');
// Route::get('/country/create','CountryController@create');
// Route::post('/country', 'CountryControlle@store');
// route::get('/country/edit,'CountryControlle@edit')   

Route::resource('country', 'CountryController');
Route::resource('artist', 'ArtistController');



