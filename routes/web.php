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

Auth::routes();
Route::get('/', function () {return view('auth.login');});
Route::group(['middleware' => ['auth','revalidate']], function (){Route::get('/', 'HomeController@index'); });
Route::get('/home', 'HomeController@index')->name('home');

// User
Route::post('add', [ 'uses'=> 'Auth\RegisterController@regis', 'as' => 'add']);
Route::get('register','Auth\RegisterController@register')->name('register');
Route::get('login','Auth\LoginController@signin')->name('login');
Route::get('profile','Auth\ProfileController@profile')->name('profile');
Route::get('listuser','ManagerController@listuser')->name('listuser');

// Dasboard
Route::get('dasboard','ManagerController@dasboard')->name('dasboard');
Route::get('DasboardKemas','Controller@DasboardKemas')->name('DasboardKemas');
