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

Route::resource('photos', 'PhotoController');

Route::resource('contact', 'ContactController');

Route::get('test', function () {
    return view('test');
});

Route::resource('trivia', 'TriviaController');

Route::resource('ancient', 'AncientController');


// POSTS
Route::get('posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');









