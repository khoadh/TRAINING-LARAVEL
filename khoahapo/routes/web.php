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

Route::get('/edit-student/{students_id}','StudentsController@edit')->name('edit-student');
Route::put('/edit-student/{students_id}','StudentsController@update')->name('edit-student');


Route::get('/delete-student/{students_id}','StudentsController@destroy')->name('delete-student');

Route::resource('students','StudentsController');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/list-subject','SubjectsController@index')->name('list-subject');
Route::get('/creat-subject','SubjectsController@create')->name('creat-subject');

Route::get('admin-login','Auth\LoginController@login')->name('login');