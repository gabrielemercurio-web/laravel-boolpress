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

Auth::routes();

// ------------ HomeController Pubblico che vede la pagina come guest
Route::get('/', 'HomeController@index')->name('home');

// ------------ HomeController Amministratore che accede con Login
Route::prefix('admin')
->namespace('Admin')
->name('admin.')
->middleware('auth')
->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});
