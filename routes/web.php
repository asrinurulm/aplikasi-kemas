<?php

// AUTH
Auth::routes();
Route::get('register','Auth\RegisterController@register')->name('register');
Route::get('login','Auth\LoginController@signin')->name('login');
Route::get('/', function () {return view('auth.login');});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('add', [ 'uses'=> 'Auth\RegisterController@regis', 'as' => 'add']);
Route::group(['middleware' => ['auth','revalidate']], function (){Route::get('/', 'HomeController@index'); });

// User
Route::get('profile','Auth\ProfileController@profile')->name('profile');
Route::get('listuser','ManagerController@listuser')->name('listuser');

// Dasboard
Route::get('dasboard','ManagerController@dasboard')->name('dasboard');
Route::get('DasboardKemas','Controller@DasboardKemas')->name('DasboardKemas');
