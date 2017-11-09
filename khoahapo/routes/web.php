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

Route::get('/list-user-html','UsersController@index');
Route::get('/list-student-html','StudentsController@index');

Route::get('/index','StudentsController@index')->name('index');

Route::get('/create-student','StudentsController@create')->name('create-student');
Route::post('/create-student','StudentsController@store') ->name('create-student');

Route::get('/edit-student/{id}','StudentsController@edit');
