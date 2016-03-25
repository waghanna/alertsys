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

Route::get('/sitemap', function()
{
	$file = public_path(). "/sitemap.xml";
	if (file_exists($file)) {
    	$content = file_get_contents($file);
    	return Response::make($content, 200, array('content-type'=>'application/xml'));
	}
});

Route::group(['middleware' => 'web'], function () {
	
	Route::get('contact', function (){
	    return view('contact');
	});
	
	Route::post('contact_form', 'ContactController@post_contact_form');
	
	Route::get('products', function () {
	    return view('products');
	});

	Route::get('product/{group}', function ($group) {
	    return view('product')->with(compact('group'));
	});
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
