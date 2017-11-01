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
Route::get('/hung-khoa',function(){
	echo "Chao ban KhoaHapo";
});
Route::get('/thong-tin-chi-tiet','Controller@views');
Route::get('/test-01',function(){

     return "Bai test demo ve route";
});
Route::get('/test-01/chi-tiet-01-html',function(){
	return "Chi tiet bai test 01";
});
Route::get('/test-02/{demo01}/{demo02}',function($demo01,$demo02){
    return "Chi tiet bai test demo :$demo01 cung voi :$demo02";
});
Route::get('/demo-test/{baitest?}',function($baitest ="diem"){
	return $baitest;
});
Route::get('/danh-sach-user',function(){
	$data_user = DB::table('user')->get();
	echo "<pre>";
	print_r($data_user);
	echo "<br>";
});
Route::get('/user/danh-sach-tai-khoan-html','UserController@index_user');

Route::get('/user/them-moi-tai-khoan-html','UserController@create_user');
Route::post('/user/them-moi-tai-khoan-html','UserController@store_user');