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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'MemosController@index');

    Route::get('/memos', 'MemosController@index');

    Route::get('/memos/create', 'MemosController@create');

    Route::post('/memos', 'MemosController@store');

    Route::get('/memos/{id}/edit', 'MemosController@edit');

    Route::patch('/memos/{id}', 'MemosController@update');

    Route::get('/memos/{id}/delete', 'Memoscontroller@destroy');

});
