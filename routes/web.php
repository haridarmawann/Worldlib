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
Route::resource('museum', 'MuseumController');
Route::resource('item', 'ItemController');

Route::get('/type','TypeController@index')->name('type.index');
Route::get('/type/create','TypeController@create')->name('type.create');
Route::post('/type', 'TypeController@store')->name('type.store');
route::get('/type/{type}/edit','TypeController@edit')->name('type.edit'); 
route::patch('/type/{type}','TypeController@update')->name('type.update');
route::delete('/type/{type}','TypeController@destroy')->name('type.destroy'); 

Route::resource('article', 'ArticleController');

