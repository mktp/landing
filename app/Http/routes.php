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

Route::get('test', 'WelcomeController@test');

Route::get('home', 'HomeController@index');

Route::post('mktp/contact/save/', ['as' => 'mktp/contact/save/', 'uses' => 'ContactformController@contact_save']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('marketing-y-estrategia', 'WelcomeController@marketing_y_estrategia');
Route::get('campanas-publicitarias', 'WelcomeController@campanas_publicitarias');
Route::get('diseno-grafico', 'WelcomeController@diseno_grafico');
Route::get('branding', 'WelcomeController@branding');
Route::get('estrategia-digital', 'WelcomeController@estrategia_digital');
Route::get('btl', 'WelcomeController@btl');
Route::get('call-center', 'WelcomeController@call_center');

Route::get('contact', 'ContactformController@contact');
Route::get('chart', 'ContactformController@chart');

Route:resource('hola', 'HolaController');



