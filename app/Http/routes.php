<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
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

Route::get('home', 'HomeController@index');

Route::get('api/girls', 'PeopleController@index');

Route::get('api/girls/{id}', 'PeopleController@show');

Route::get('api/cards', 'CardController@index');

Route::get('api/cards/{id}', 'CardController@show');

Route::get('api/girls/cards/{id}', 'PeopleController@showCards');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
