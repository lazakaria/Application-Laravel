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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/search','voituresController@search');

Route::resource('voitures','voituresController');


Route::resource('assurances','assurancesController');


Route::resource('entretiens','entretiensController');

Route::resource('contacts','contactsController');

Route::get('/contacts', 'ContactsController@contacts');