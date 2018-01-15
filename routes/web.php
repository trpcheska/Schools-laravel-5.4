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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/schools', 'SchoolsController@index');

Route::get('/students', 'StudentsController@index');

Route::get('/students/create', 'StudentsController@create');

Route::post('/students/create', 'StudentsController@save');

Route::get('/student/{id}', 'StudentsController@show');

Route::get('/schools/create', 'SchoolsController@create');

Route::post('/schools/create', 'SchoolsController@save');

Route::get('/schools/show/{id}', 'SchoolsController@show');

Route::get('/schools/edit/{id}', 'SchoolsController@edit');

Route::post('/schools/edit/{id}', 'SchoolsController@update');

Route::get('/students/edit/{id}', 'StudentsController@edit');

Route::post('/students/edit/{id}', 'StudentsController@update');

