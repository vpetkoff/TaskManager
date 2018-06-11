<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Show all tasks on main page
Route::get('/', 'TasksController@index');

// Group routes related to tasks by prefix
Route::prefix('tasks')->group(function () {

  // Create task routes
  Route::get('/create', 'TasksController@create');
  Route::post('/create', 'TasksController@store');

  // Show a single task with ID
  Route::get('/{id}', 'TasksController@show');

  // Edit a single task with ID
  Route::get('/edit/{id}', 'TasksController@edit');

  // Update a single task with ID
  Route::post('/update/{id}', 'TasksController@update');

  // Delete a single task with ID
  Route::post('/delete/{id}', 'TasksController@destroy');
});
