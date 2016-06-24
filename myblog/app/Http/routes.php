<?php

 

Route::get('/', 'PostsController@index');
Route::get('/home', ['as' => 'home', 'uses' => 'PostsController@index']);

Route::get('auth/logout', 'Auth\AuthController@logout');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);


Route::group(['routeMiddleware' => ['auth']], function (){

	Route::get('new-post', 'PostsController@create');

	Route::post('new-post', 'PostsController@store');

	Route::get('edit/{slug}', 'PostsController@edit');

	Route::post('update', 'PostsController@update');

	Route::get('delete/{id}', 'PostsController@destroy');

	Route::post('comment/add', 'CommentsController@store');

});

Route::get('/{slug}', ['as' =>'post', 'uses' => 'PostsController@show']);