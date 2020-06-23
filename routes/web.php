<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/edit/{note}', function ($note) {
    return view('edit_contact', ['note' => $note]);
});


Route::post('/form', 'PhoneBookController@insertt')->name('phone-insert');
Route::get('/phone_list', 'PhoneBookController@phone_lst')->name('phone-list');
Route::get('/phone_list/edit/', 'PhoneBookController@edit')->name('phone-edit');
Route::post('/phone_list/submit', 'PhoneBookController@submit')->name('phone-submit');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
