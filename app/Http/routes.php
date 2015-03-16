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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/posteaza', 'PostController@index');

Route::post('image_upload', array('as' => 'imageUpload', 'uses' => 'PostController@imageUpload'));

Route::get('posteaza/motocicleta', array('as' => 'motocicleta', 'uses' => 'PostController@postBike'));
Route::get('posteaza/motocicleta/{id?}', array('as' => 'motocicleta', 'uses' => 'PostController@getBikeModels'));
Route::post('posteaza/motocicleta', array('as' => 'posteaza-moto', 'uses' => 'PostController@saveBike'));

Route::get('posteaza/echipament', array('as' => 'echipament', 'uses' => 'PostController@postEquipment'));


Route::get('posteaza/piese-noi', array('as' => 'piese-noi', 'uses' => 'PostController@postPieseNoi'));

Route::get('posteaza/piese-sh', array('as' => 'piese-sh', 'uses' => 'PostController@index'));
Route::get('posteaza/consumabile', array('as' => 'consumabile', 'uses' => 'PostController@index'));
Route::get('posteaza/accesorii', array('as' => 'accesorii', 'uses' => 'PostController@index'));

Route::get('/confirm-account/{id}/{code}', 'UserController@activate');

Route::controllers([
	'auth' => 'AuthController',
	'password' => 'PasswordController',
]);
