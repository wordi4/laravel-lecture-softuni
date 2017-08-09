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

Route::get('no-controller-home', function () {
    return view('home');
});

Route::get('blade-examples', function () {
    return view('blade-examples');
})->name('blade-examples');

Route::get('/', 'DefaultController@getHome')->name('home');

Route::get('user/{id}', function ($id) {
    return 'User ' . $id;
})->name('userId');

Route::get('user-regex/{id}', 'DefaultController@getUserRegex')->where('id', '[0-9]+');

// Middleware route
Route::get('admin', function () {
    return 'Here goes the admin page';
})->name('adminOnly')->middleware('adminOnly');

// admin prefix routs
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
        return 'Here goes the admin page';
    });
});

// restful routes
Route::resource('article','ArticleController');

// restful routes with custom name and prefix
Route::resource('backend/article','ArticleController', ['as' => 'backend']);