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

Route::get('/', 'WelcomeController@index');

Route::get('api', 'ApiController@api');

Route::get('home', 'HomeController@home');

Route::get('flights', 'FlightsSearchController@flights');

Route::get('create_tile', 'TilesCreateController@createTile');

Route::post('upload', 'TilesCreateController@upload');

Route::get('test', 'TestController@create');

Route::post('store', 'TestController@store');

Route::get('tiles', 'TilesCreateController@tilesShow');

Route::get('book/{id}', 'TilesCreateController@book');

Route::delete('delete/{id}', 'TilesCreateController@destroy');

Route::post('search', 'WelcomeController@search');

Route::get('tiles_pub', 'WelcomeController@tiles_pub');

Route::get('template', 'WelcomeController@template');

Route::get('logint', 'WelcomeController@logintemplate');

Route::post('search_int', 'HomeController@search_int');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
