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

//	All API endpoints for the vpn
Route::post('/api/user/login', 'ApiController@login')->name('api_login'); //Login
Route::post('/api/user/register', 'ApiController@register')->name('api_register'); //Register
Route::get('/api/servers/get', 'ApiController@servers')->name('api_server_list'); //Get Servers
Route::post('/api/user/session', 'ApiController@verifySession')->name('api_session'); //Verify Session
Route::post('/api/user/settings', 'ApiController@settings')->name('api_settings'); // Geting Settings
Route::post('/api/user/settings/save', 'ApiController@setSetting')->name('api_save_settings'); //Setting settings

// All other routes 
Route::get('/dashboard', 'DashboardController@index');

Route::get('/', function () {
    return view('welcome.index');
})->name('welcome');





