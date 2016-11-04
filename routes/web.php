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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/practice', function() {
    echo "App::environment(): ";
	echo App::environment();
	echo "<br>";
	echo "App.URL: ";  
	echo config('app.url');
});

Route::post('/practice', function() {

    $input =  Input::all();
    print_r($input + "hola");

});

/*
Route::get('/tag', 'TagController@index');
Route::get('/tag/create', 'TagController@create');
Route::post('/tag', 'TagController@store');
Route::get('/tag/{tag_id}', 'TagController@show');
Route::get('/tag/{tag_id}/edit', 'TagController@edit');
Route::put('/tag/{tag_id}', 'TagController@update');
Route::delete('/tag/{tag_id}', 'TagController@destroy');
 
 o
 
Route::resource('tag', 'TagController');
*/

/*
Route::get('/proyecto', 'ProyectoController@index');
Route::get('/proyecto/create', 'ProyectoController@create');
Route::post('/proyecto', 'ProyectoController@store');
Route::get('/proyecto/{proyecto_id}', 'ProyectoController@show');
Route::get('/proyecto/{proyecto_id}/edit', 'ProyectoController@edit');
Route::put('/proyecto/{proyecto_id}', 'ProyectoController@update');
Route::delete('/proyecto/{proyecto_id}', 'ProyectoController@destroy');
*/

Route::resource('proyecto', 'ProyectoController');