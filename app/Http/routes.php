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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produit','prodcon');
Route::get('admin','prodcon@admin');

Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');

//Route::get('/auth/register','Auth\AuthController@getRegister');
//Route::post('/auth/register','Auth\AuthController@postRegister');

//Route::get('/produit',['middleware'=>'auth','uses'=>'prodcon@index']);
Route::get('/admin',['middleware'=>'auth','uses'=>'prodcon@admin']);


