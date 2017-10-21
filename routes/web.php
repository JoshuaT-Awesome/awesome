<?php
use Illuminate\Http\Request;


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


//TEST
Route::get('test', function () {
    return view('test');
});

Route::post('handle-form', function() {
	return request()->file('book')->getClientOriginalName(); 
});

Route::post('sample', function() {

	return view('test');
});

Route::get('developer', function() {

	return view('layouts.developer');
});


Route::resource('ancient', 'AncientController');


// POSTS
Route::get('posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

/*
Route::post('/posts/files', function()  {

	request()->file('blog_image')->store('public'); //storage/app/public

	return view('welcome');

});

Route::post('/posts', function (Request $request) {

	var_dump($request->all());
}

	);


Route::get('trivia', 'TriviaController@index');
Route::match(['get', 'post'],'/trivia/test', 'TriviaController@test');
*/
Route::resource('trivia', 'TriviaController');
Route::resource('stats', 'StatController');


