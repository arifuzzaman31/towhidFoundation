<?php

Route::get('locale/{locale}', function ($locale) {
    Session::put('lang', $locale);
    return redirect()->back();
});

Route::get('locale/en', function () {
    Session::flush('lang');
    return redirect()->back();
});

Route::get('contact-us', function () {
    return view('theme.pages.contact');
})->name('contact.us');

Route::get('trainning-registration', function () {
    return view('theme.pages.registration');
})->name('training.registration');

Route::get('login', [
    'as'   => 'login',
    'uses' => 'DashboardController@login',
]);

Route::post('login-check.post', [
    'as'   => 'login-check.post',
    'uses' => 'DashboardController@logincheck',
]);

Route::get('/', [
    'as'   => '/',
    'uses' => 'FrontController@index',
]);

Route::get('about-us', [
    'as'   => 'about.us',
    'uses' => 'FrontController@about',
]);
Route::get('services', [
    'as'   => 'our.service',
    'uses' => 'FrontController@services',
]);

Route::get('member', [
    'as'   => 'our.member',
    'uses' => 'FrontController@AllMember',
]);

Route::get('blogs', [
    'as'   => 'our.blog',
    'uses' => 'FrontController@getAllBlog',
]);

Route::get('blog/{id}/{slug}', [
    'as'   => 'blog.details',
    'uses' => 'FrontController@getSpecificBlog',
]);

Route::post('contact', 'ContactController@store');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// towhid foundation fontend route
Route::get('service/{slug}', [
    'as'   => 'get-specific-service',
    'uses' => 'FrontController@getSpecificService',
]);

Route::get('ambulance', [
    'as'   => 'get-ambulance-service',
    'uses' => 'FrontController@ServiceForm',
]);

Route::post('send-user-request', [
    'as'   => 'send-user-request',
    'uses' => 'FrontController@SaveForm',
]);

Route::get('get-album-photo', [
    'as'   => 'get-album-photo',
    'uses' => 'FrontController@loadPhoto',
]);

Route::get('album/{id}/{slug}', [
    'as'   => 'album.details',
    'uses' => 'FrontController@albumDetails',
]);

Route::get('albums', [
    'as'   => 'album.all',
    'uses' => 'FrontController@albums',
]);

Route::get('objective', [
    'as'   => 'objective.all',
    'uses' => 'FrontController@objective',
]);

Route::get('notices', [
    'as'   => 'notice.all',
    'uses' => 'FrontController@notice',
]);
