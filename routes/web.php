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

// Routing order
Route::get('order/test', function () {
    return 'ala bala';
});

Route::get('order/{name}', function ($name) {
    return $name;
});

// Action route
Route::get('/', 'DefaultController@getHome')->name('home');

// Inline return routes
Route::get('blade-examples', function () {
    return view('blade-examples');
})->name('blade-examples');

Route::get('user', function () {
    return 'User';
})->name('userId');

Route::get('user-regex/{id}', 'DefaultController@getUserRegex')->where('id', '[0-9]+');

// Middleware route
Route::get('admin', function () {
    return 'Here goes the admin page';
})->name('adminOnly')->middleware('adminOnly');

// admin prefix routs
Route::prefix('users-prefix')->group(function () {
    Route::get('test', function () {
        // Matches The "/admin/users" URL
        return 'Users prefix test';
    });

    Route::get('test2', function () {
        // Matches The "/admin/users" URL
        return 'Users prefix test2';
    });
});

// Method routes
Route::get('get-route', function () {
    return Response::json(['method' => 'get']);
});

Route::post('post-route', function () {
    return Response::json(['method' => 'post']);
});

// restful routes
Route::resource('article', 'ArticleController');