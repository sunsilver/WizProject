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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'LoginController@logout');
//board

Route::group(['middleware' => 'IsLogin'], function () {
    Route::get('/list', 'BoardController@index')->name('list');
    Route::get('/create_form', 'BoardController@create');
    Route::post('/store', 'BoardController@store');
    Route::get('/view/{id}', 'BoardController@show')->name('view');
    Route::get('/edit_form/{id}', 'BoardController@edit');
    Route::post('/update/{id}', 'BoardController@update');
    Route::get('/delete/{id}', 'BoardController@destroy');

    // Comment API
    Route::post('/comment/create', 'CommentController@create')->name('comment.create');
    Route::post('/comment/delete', 'CommentController@delete')->name('comment.delete');
    Route::post('/comment/update', 'CommentController@update')->name('comment.update');
});