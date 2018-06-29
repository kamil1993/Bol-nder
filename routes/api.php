<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/quistionsOfLanguage/{language}', 'quistionController@index');
Route::get('/quistionsOfLanguageFromCategory/{category}', 'quistionController@cat');
Route::post('/quistions/create', 'quistionController@create');
Route::get('/getQuistion/{id}', 'quistionController@show');
Route::post('/createAnsower', 'ansowerController@create');
Route::get('/getAnsowers/{id}', 'ansowerController@index');