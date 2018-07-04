<?php

use Illuminate\Http\Request;

// hier werden die API routs defeniert,und der request wird an den zuständigen Controller weitergeleitet,und dabei eine Action
//also eine Methode von diesem Controller aufgerufen wird
Route::get('/quistionsOfLanguage/{language}', 'quistionController@index');
Route::get('/quistionsOfLanguageFromCategory/{category}', 'quistionController@cat');
Route::post('/quistions/create', 'quistionController@create');
Route::get('/getQuistion/{id}', 'quistionController@show');
Route::post('/createAnsower', 'ansowerController@create');
Route::get('/getAnsowers/{id}', 'ansowerController@index');