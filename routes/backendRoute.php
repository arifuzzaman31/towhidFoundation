<?php 

Route::get('dashboard', [
	'as' 	=> 'dashboard',
	'uses'  => 'DashboardController@index'
]);

Route::get('logout', [
	'as' 	=> 'logout',
	'uses'  => 'DashboardController@logout'
]);

Route::get('password', [
	'as' 	=> 'change-password',
	'uses'  => 'DashboardController@changePassword'
]);

Route::post('password', [
	'as' 	=> 'update-password',
	'uses'  => 'DashboardController@updatePassword'
]);

// User Query 
Route::get('query', [
	'as' 	=> 'userquery',
	'uses'  => 'UserqueryController@index'
]);

Route::get('request-delete/{id}', [
	'as' 	=> 'request-delete',
	'uses'  => 'UserqueryController@destroy'
]);

Route::get('show-request/{id}', [
	'as' 	=> 'show-request',
	'uses'  => 'UserqueryController@show'
]);

Route::get('change-request-confirm/{id}', [
	'as' 	=> 'change-request-confirm',
	'uses'  => 'UserqueryController@changestatus'
]);


	// Service route
Route::get('get-service', [
	'as' 	=> 'get-service',
	'uses'  => 'ServiceController@getService'
]);

Route::get('service', [
	'as' 	=> 'service',
	'uses'  => 'ServiceController@index'
]);

Route::post('service.store', [
	'as' 	=> 'service.store',
	'uses'  => 'ServiceController@store'
]);

Route::post('service-update/{id}', [
	'as' 	=> 'service.update',
	'uses'  => 'ServiceController@update'
]);

Route::get('service-delete/{id}', [
	'as' 	=> 'service-delete',
	'uses'  => 'ServiceController@destroy'
]);

Route::get('edit.service/{id}', [
	'as' 	=> 'edit.Service',
	'uses'  => 'ServiceController@edit'
]);

Route::get('show-service/{id}', [
	'as' 	=> 'show-Service',
	'uses'  => 'ServiceController@show'
]);

Route::get('change-service-status/{id}', [
	'as' 	=> 'change-service-status',
	'uses'  => 'ServiceController@changestatus'
]);

	// Blog
Route::get('blog', [
	'as' 	=> 'blog',
	'uses'  => 'BlogController@index'
]);

Route::post('blog.store', [
	'as' 	=> 'blog.store',
	'uses'  => 'BlogController@store'
]);

Route::post('blog-update/{id}', [
	'as' 	=> 'blog.update',
	'uses'  => 'BlogController@update'
]);

Route::post('blog-delete/{id}', [
	'as' 	=> 'blog-delete',
	'uses'  => 'BlogController@destroy'
]);

Route::get('edit.blog/{id}', [
	'as' 	=> 'edit.blog',
	'uses'  => 'BlogController@edit'
]);

Route::get('show-blog/{id}', [
	'as' 	=> 'show-blog',
	'uses'  => 'BlogController@show'
]);

Route::get('change-blog-status/{id}', [
	'as' 	=> 'change-blog-status',
	'uses'  => 'BlogController@changeStatus'
]);

Route::get('get-blog', [
	'as' 	=> 'get-blog',
	'uses'  => 'BlogController@getblog'
]);

	//Team Member

Route::get('gallery', [
	'as' 	=> 'photo-gallery',
	'uses'  => 'GalleryController@index'
]);

Route::get('get-photo', [
	'as' 	=> 'get-photo',
	'uses'  => 'GalleryController@getPhoto'
]);

Route::post('photo.store', [
	'as' 	=> 'photo.store',
	'uses'  => 'GalleryController@store'
]);

Route::post('photo-update/{id}', [
	'as' 	=> 'photo.update',
	'uses'  => 'GalleryController@update'
]);

Route::get('photo-delete/{id}', [
	'as' 	=> 'photo-delete',
	'uses'  => 'GalleryController@destroy'
]);

Route::get('edit.photo/{id}', [
	'as' 	=> 'edit.photo',
	'uses'  => 'GalleryController@edit'
]);

Route::get('show-photo/{id}', [
	'as' 	=> 'show-photo',
	'uses'  => 'GalleryController@show'
]);

Route::get('change-photo-status/{id}', [
	'as' 	=> 'change-photo-status',
	'uses'  => 'GalleryController@changeStatus'
]);

	//Album
Route::get('album', [
	'as' 	=> 'get-album',
	'uses'  => 'AlbumController@index'
]);

Route::get('get-to-create', [
	'as' 	=> 'get-to-create',
	'uses'  => 'AlbumController@create'
]);

Route::post('album.store', [
	'as' 	=> 'album.store',
	'uses'  => 'AlbumController@store'
]);

Route::get('change-album-status/{id}', [
	'as' 	=> 'change-album-status',
	'uses'  => 'AlbumController@changeStatus'
]);

Route::get('album-delete/{id}', [
	'as' 	=> 'album-delete',
	'uses'  => 'AlbumController@destroy'
]);

Route::get('edit.album/{id}', [
	'as' 	=> 'edit.album',
	'uses'  => 'AlbumController@edit'
]);

Route::post('album-update/{id}', [
	'as' 	=> 'album.update',
	'uses'  => 'AlbumController@update'
]);
	//Portfolio

Route::get('portfolio', [
	'as' 	=> 'portfolio',
	'uses'  => 'PortfolioController@index'
]);

Route::get('get-portfolio', [
	'as' 	=> 'get-portfolio',
	'uses'  => 'PortfolioController@getPortfolio'
]);

Route::post('portfolio', [
	'as' 	=> 'portfolio.store',
	'uses'  => 'PortfolioController@store'
]);

Route::post('portfolio-update/{id}', [
	'as' 	=> 'portfolio.update',
	'uses'  => 'PortfolioController@update'
]);

Route::get('portfolio-delete/{id}', [
	'as' 	=> 'portfolio-delete',
	'uses'  => 'PortfolioController@destroy'
]);

Route::get('edit.portfolio/{id}', [
	'as' 	=> 'edit.portfolio',
	'uses'  => 'PortfolioController@edit'
]);

Route::get('change-portfolio-status/{id}', [
	'as' 	=> 'change-portfolio-status',
	'uses'  => 'PortfolioController@changeStatus'
]);

	//Slider Route
Route::get('all-slider', [
	'as' 	=> 'all-slider',
	'uses'  => 'SliderController@index'
]);

Route::get('add-slider', [
	'as' 	=> 'add-slider',
	'uses'  => 'SliderController@create'
]);

Route::post('slider-put', [
	'as' 	=> 'slider.store',
	'uses'  => 'SliderController@store'
]);

Route::post('slider.update/{id}', [
	'as' 	=> 'slider.update',
	'uses'  => 'SliderController@update'
]);

Route::get('slider-delete/{id}', [
	'as' 	=> 'slider-delete',
	'uses'  => 'SliderController@destroy'
]);

Route::get('edit-slider/{id}', [
	'as' 	=> 'edit-slider',
	'uses'  => 'SliderController@edit'
]);

Route::get('change-slider-status/{id}', [
	'as' 	=> 'change-slider-status',
	'uses'  => 'SliderController@changeStatus'
]);

	//Product Route
Route::get('all-priceplan', [
	'as' 	=> 'all-priceplan',
	'uses'  => 'ProducrPriceController@index'
]);

Route::get('add-priceplan', [
	'as' 	=> 'add-priceplan',
	'uses'  => 'ProducrPriceController@create'
]);

Route::post('priceplan-put', [
	'as' 	=> 'priceplan.store',
	'uses'  => 'ProducrPriceController@store'
]);

Route::post('priceplan.update/{id}', [
	'as' 	=> 'priceplan.update',
	'uses'  => 'ProducrPriceController@update'
]);

Route::get('priceplan-delete/{id}', [
	'as' 	=> 'priceplan-delete',
	'uses'  => 'ProducrPriceController@destroy'
]);

Route::get('edit-priceplan/{id}', [
	'as' 	=> 'edit-priceplan',
	'uses'  => 'ProducrPriceController@edit'
]);

Route::get('change-priceplan-status/{id}', [
	'as' 	=> 'change-priceplan-status',
	'uses'  => 'ProducrPriceController@changeStatus'
]);
