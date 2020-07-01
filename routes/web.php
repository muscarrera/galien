<?php

use Illuminate\Support\Facades\Route;
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
    return view('accueil');
});

Route::get('profils','ProfilController@index');
Route::get('/profils/getactive','ProfilController@getactive');
Route::get('profils/create','ProfilController@create');
Route::post('profils','ProfilController@store');
Route::get('profils/{id}/edit','ProfilController@edit');
Route::put('profils/{id}','ProfilController@update');
Route::delete('profils/{id}','ProfilController@destroy');

Route::get('pre-insc/print/{id}/pdf/{dt}', 'ProfilController@savepdf');
Route::get('send-mail/{id}','ProfilController@mailsend');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/panel/{any}', 'PanelController@index')->where('any', '.*');