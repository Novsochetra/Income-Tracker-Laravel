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

Route::group(['middleware' => ['auth']], function () { 
    Route::get('/', function () {
        return view('home');
    });
    Route::resource('incomes', 'Incomes');
    Route::get('incomes/index/archive', 'Incomes@archive')->name('incomes.archive');
    Route::resource('categories', 'CategoriesController');
    Route::get('categories/index/archive', 'CategoriesController@archive')->name('categories.archive');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
});