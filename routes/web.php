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

Route::get('/', function() {
  return view('home');
});

Route::get('auth/login', function() {
  return view('auth.login');
});

Route::get('catalog','CatalogController@getIndex');

Route::get('catalog/show/{id}','CatalogController@getShow');

Route::get('catalog/create', 'CatalogController@getCreate');

Route::get('catalog/edit/{id}', 'CatalogController@getEdit');

Auth::routes();

Route::get('/home', 'HomeController@index');
