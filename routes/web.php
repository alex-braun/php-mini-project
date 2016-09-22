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

// Route::get('/examples', 'ExampleController@index');
// Route::get('/examples/{id}', 'ExampleController@show');
Route::resource('ideas', 'IdeaController');
Route::resource('examples', 'ExampleController');
Route::resource('stories', 'StoryController');
