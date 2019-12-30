<?php

Route::get('login', [
	'as' 	=> 'login',
	'uses'  => 'DashboardController@login'
]);

Route::post('login-check.post', [
	'as' 	=> 'login-check.post',
	'uses'  => 'DashboardController@logincheck'
]);

Route::get('/', [
	'as' => '/',
	'uses' => 'FrontController@index'
]);

Route::get('blogs', [
	'as' => 'get-all-blog',
	'uses' => 'FrontController@getAllBlog'
]);

Route::get('blog/{slug}', [
	'as'	=> 'get-specific-blog',
	'uses' 	=> 'FrontController@getSpecificBlog'
]);

Route::post('contact','ContactController@store');



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// towhid foundation fontend route
Route::get('service/{slug}', [
	'as'	=> 'get-specific-service',
	'uses' 	=> 'FrontController@getSpecificService'
]);

Route::get('ambulance', [
	'as'	=> 'get-ambulance-service',
	'uses' 	=> 'FrontController@ServiceForm'
]);

Route::post('send-user-request', [
	'as'	=> 'send-user-request',
	'uses' 	=> 'FrontController@SaveForm'
]);