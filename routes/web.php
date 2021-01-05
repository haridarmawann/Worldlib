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

Route::get('/cari','HomeController@cari')->name('country-search');
Route::get('/country/{id}','CountryController@index')
        ->name('country');
Route::get('/country/museum/{id}','MuseumController@index')
        ->name('museum');
Route::get('/country/museum/item/{id}','ItemController@index')
        ->name('item');
Route::get('/country/museum/article/{id}','ArticleController@index')
        ->name('article');
Route::get('/type/{type}','TypeController@index')
        ->name('type');
Route::get('/artist/{name}','ArtistController@index')
        ->name('artist');

Route::prefix('admin')
    ->namespace('admin')
    ->middleware('auth')
    ->group(function () {
       Route::get('/','PageController@index')->name('admin');
       Route::post('subcat', 'ItemController@subCat')
              ->name('subCat.store');
       Route::resource('country', 'CountryController');
       Route::resource('artist', 'ArtistController');
       Route::resource('museum', 'MuseumController');
       Route::resource('item', 'ItemController'); 
       Route::resource('type','TypeController');
       Route::resource('article', 'ArticleController');
        
    }); 
Auth::routes(['verify' => true]);