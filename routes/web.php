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
    return view('welcome');
});

Route::resource('categories', 'CategoriesController');

// Route::get('/category/create', 'CategoriesController@create');
// Route::get('/category', 'CategoriesController@store');
// Route::get('/category/edit', 'CategoriesControler@edit');
// Route::get('/category/update', 'CategoriesController@udpate');
// Route::get('/category/show', 'CategoriesController@show');

