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

Route::get('/', function () {
    return view('pages.dashboard'); // or we can also use view('pages.test');
});

//Categories
Route::get('/category','CategoryController@index')->name('category.index');

//Category add
Route::post('/addCategory','CategoryController@store')->name('category.add');