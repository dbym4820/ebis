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
    return view('index');
});

// ユーザ情報について
Route::get('/users', 'UserpageController@index');
Route::get('/create', 'UsersController@create');
Route::post('/posts', 'UsersController@save');
Route::get('/users/{user}', 'UserpageController@confirm');
Route::post('/delete', 'UsersController@delete' );

// スレッド検索
Route::get('/threads', 'ThreadsController@index');
Route::get('/thread-create', 'ThreadsController@create');
Route::post('/thread-save', 'ThreadsController@save');
Route::get('/threads/{thread}', 'ThreadsController@confirm');
Route::post('/thread-delete', 'ThreadsController@delete' );

// スレッド
Route::get('/thread/{thread_id}', 'ThreadsController@content');
