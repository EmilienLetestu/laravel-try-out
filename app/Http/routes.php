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


Route::resource('tasks', 'TasksController');


Route::get('/tasks/{id}/update-done', 'TasksController@updateDone')
    ->where('id', '[0-9]+')
    ->name('updateDone')
;
