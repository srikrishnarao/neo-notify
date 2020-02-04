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

Route::resource('register', 'RegisterController');
Route::resource('login', 'LoginController');
Route::get('/forgot-password', function(){
    return view('forgot-password');
});


// Route::get('/logout', function(){
//     return 'logout';
// });  BUG - The GET method is not supported for this route. Supported methods: POST

Route::resource('home', 'HomeController');
    Route::get('/', function () {
        return view('welcome');
});


Auth::routes();
// Product Routes

// All the routes that try to access dashboard goes through auth middleware
Route::group(['middleware' => ['auth']], function() {
    Route::get('notifications/create', function () {
        return view('notifications.create');
    });
    Route::get('notifications/', function () {
        return view('notifications.index');
    });

});

Route::get('/test-table', function () {
    return view('test-select');
});