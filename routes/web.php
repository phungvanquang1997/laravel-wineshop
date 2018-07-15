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

Route::get('/query','TestController@getAll');

Route::get('/go/{id}','TestController@goID');

Route::get('/tinhtoan/{s1}/{s2}','TestController@getTinhToan');

Route::get('/tinhtoan','TestController@testModel');

Route::group(['prefix'=>'testGroup'],function(){
	Route::get('/test1',function(){
		return "group : test 1";
	});
	Route::get('/test1/{s1}',function($s1){
		return "group : ".$s1;
	});
});


Route::get('/','ProductController@getListProduct');

Route::get('/product/{id}','ProductController@showDetail');


Route::post('login','UsersController@verifyUser');

Route::get('login','UsersController@showLogin');

Route::get('/logout','UsersController@logOut');

Route::post('/register','UsersController@postRegister');

Route::get('/register','UsersController@getRegister')->name('register');

Route::get('/producer/{id}','ProducerController@getProducer');

Route::get('/test',function()
{
	$data = DB::table('users')->get();
	return $data;
});