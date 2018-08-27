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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('category', 'CategoryController');
// Route::resource('post', 'PostController');
Route::resource('post', 'PostController',
    [
        'middleware' =>'auth'
    ]
);
// Route::get('/category', 'CategoryController@index')->name('category');

Route::get('accessor/index', 'AccessorController@index');

// Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
