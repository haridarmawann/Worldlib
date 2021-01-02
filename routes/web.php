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


Route::get('/','HomeController@index')
      ->name('home');
Route::get('/negara','HomeController@detail_country')
      ->name('detail_c');
Route::get('/museum','HomeController@detail_museum')
      ->name('detail_m');
Route::get('/item','HomeController@detail_item')
      ->name('detail_i');

Route::prefix('admin')
    ->namespace('admin')
    ->middleware('auth')
    ->group(function () {
       Route::get('/','PageController@index')->name('admin');
       Route::resource('country', 'CountryController');
       Route::resource('artist', 'ArtistController');
       Route::resource('museum', 'MuseumController');
       Route::resource('item', 'ItemController');
       Route::resource('type','TypeController');
       Route::resource('article', 'ArticleController');
        
    });
    
Auth::routes(['verify' => true]);