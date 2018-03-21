<?php
use Illuminate\Support\Facades\Auth;
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
	if (Auth::check()){
		return view('home');	
	}else{
		return view('welcome');
	}
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/property', 'PropertyController@index')->name('property');
Route::get('/account', 'AccountController@index')->name('account')->middleware('auth');
Route::get('/account/favorites', 'AccountController@favorites')->name('account')->middleware('auth');
Route::get('/account/saved-searches', 'AccountController@savedsearches')->name('account')->middleware('auth');
Route::get('/account/cma-reports', 'AccountController@cmareports')->name('account')->middleware('auth');
Route::get('/account/vendors', 'AccountController@vendors')->name('account')->middleware('auth');
Route::get('/account/settings', 'AccountController@settings')->name('account')->middleware('auth');
Route::get('/account/password', 'AccountController@password')->name('account')->middleware('auth');
//Route::get('/privacy', 'HomeController@index')->name('privacy');
//Route::get('/', 'HomeController@index')->name('home');
Route::get('/api-call','DemoController@checkapi');


Route::get('/privacy-legal', function () {
		return view('privacylegal');
});