<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('product/{group}', function ($group) {
    return view('product')->with(compact('group'));
});

Route::get('products', function () {
    return view('products');
});

Route::group(['middleware' => 'web'], function () {
	Route::get('contact', function ($result=null) {
	    return view('contact')->with('result', $result);
	});
	Route::post('contact_form', 'ContactController@post_contact_form');

});

Route::get('resources', function () {
    return view('resources');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::group(['middleware' => 'web'], function () {
//     Route::auth();

//     Route::get('/home', 'HomeController@index');
// });
