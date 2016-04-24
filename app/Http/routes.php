<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
		// Authentication Routes...
		Route::get('login', 'Auth\AuthController@showLoginForm');
		Route::post('login', 'Auth\AuthController@login');
		Route::get('logout', 'Auth\AuthController@logout');
		// Registration Routes...
		if(App\User::count() <= 0) {
			Route::get('register', 'Auth\AuthController@showRegistrationForm');
			Route::post('register', 'Auth\AuthController@register');
		}
		// Password Reset Routes...
		Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
		Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
		Route::post('password/reset', 'Auth\PasswordController@reset');

Route::group(['prefix' => 'kanepe', 'middleware'=>'auth'], function(){
	Route::group(['prefix' => 'posts'], function(){
		Route::get('new', 'PostController@new');
		Route::post('new', 'PostController@save');
		Route::get('{pageid?}', 'PostController@index');
		Route::get('edit/{post}', 'PostController@edit');
		Route::get('delete/{post}', 'PostController@delete');
	});

	Route::group(['prefix' => 'pages'], function(){
		Route::get('new', 'PageController@new');
		Route::post('new', 'PageController@save');
		Route::get('{pageid?}', 'PageController@index');
		Route::get('edit/{page}', 'PageController@edit');
		Route::get('delete/{page}', 'PageController@delete');
	});
	Route::get('aboutme', 'PageController@editAboutMe');
	Route::post('aboutme', 'PageController@saveAboutMe');
	Route::get('', 'PostController@index');
});

Route::get('/', 'PageController@viewAboutMe');
Route::get('blog/page/{pageid?}', 'PostController@blogIndex');
Route::get('blog/', 'PostController@blogIndex');
Route::get('blog/{slug}', 'PostController@viewPost');
Route::get('{slug}/', 'PageController@viewPage');

/*
/kanepe/posts/pageid
/kanepe/posts/edit/id
/kanepe/posts/new/
/kanepe/posts/delete/id


/kanepe/pages/pageid
/kanepe/pages/edit/id
/kanepe/pages/new/
/kanepe/pages/delete/id

/kanepe/aboutme/


/slug/
/blog/page/pageid
/blog/slug

*/
