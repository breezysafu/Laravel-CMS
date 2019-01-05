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

//Remove Category
Route::post('/deleteCategory','CategoryController@removeCategory')->name('category.remove');

//Edit Category
Route::post('/editCategory','CategoryController@editCategory')->name('category.edit');

//posts
Route::get('/addNewPost','PostController@index')->name('post.index');

//Add Posts
Route::post('/addPost','PostController@store')->name('post.add');

Route::get('/blog','BlogController@index')->name('blog.index');
Route::get('/blog/{id}','BlogController@show')->name('blog.show');

Route::get('/admin','AdminController@index')->name('admin.index');
Route::post('/admin','AdminController@store')->name('admin.store');

Route::get('/login','Auth\AdminLoginController@index')->name('login');
Route::post('/login','AuthAdminLoginController@login')->name('login.submit');
