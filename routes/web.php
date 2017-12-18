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
Route::get('blog/{slug}', ['uses' => 'BlogController@single', 'as' => 'blog.single']);

Route::get('about', 'PagesController@About');
Route::get('contact', 'PagesController@Contact');
Route::get('/', 'PagesController@index');
Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController', ['except' => ['create']]);
Route::resource('tags', 'TagController', ['except' => ['create']]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
