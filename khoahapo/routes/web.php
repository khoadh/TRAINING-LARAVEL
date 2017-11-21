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

Route::get('/create-subject','SubjectsController@create')->name('create-subject');
Route::post('create-subject','SubjectsController@store')->name('create-subject');

Route::get('admin/login','AdminController@login')->name('admin.getlogin');
Route::post('admin/login','AdminController@postlogin')->name('admin.postlogin');

Route::get('admin/register','AdminController@register')->name('admin.register');
Route::post('admin/register','AdminController@postregister')->name('admin.register');

Route::get('admin/listAdmin','AdminController@listAdmin')->name('listAdmin');

Route::get('/edit-admin/{id}','AdminController@edit')->name('edit-admin');
Route::put('/edit-admin/{id}','AdminController@update')->name('edit-admin');

Route::get('/list-teacher','TeachersController@index')->name('list-teacher');

Route::get('/create-teacher','TeachersController@create')->name('create-teacher');
Route::post('/create-teacher','TeachersController@store')->name('create-teacher');

Route::get('/delete-teacher','TeachersController@destroy')->name('delete-teacher');

Route::get('/edit-teacher/{teacher_id}','TeachersController@edit')->name('edit-teacher');


Route::get('/quan-ly-diem-sinh-vien','StandardStudentsController@index')->name('quan-ly-diem');

Route::get('/them-moi-diem-sinh-vien','StandardStudentsController@create')->name('them-diem');
Route::post('/them-moi-diem-sinh-vien','StandardStudentsController@store')->name('them-diem');





