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

Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::get('/', 'PagesController@getIndex')->name('homePage');
Route::resource('posts', 'PostController');
Route::resource('categories', 'CategoryController', ['except' => ['create']]);
Route::resource('tags', 'TagController', ['except' => ['create']]);
//Route::resource('comments', 'CommentController', ['except' => ['create']]);

// Comments
Route::post('comments/{post_id}', ['uses' => 'CommentController@store', 'as' => 'comments.store']);
Route::get('comments/{id}/edit', ['uses' => 'CommentController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
