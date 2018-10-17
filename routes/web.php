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

Route::get('/admin', 'Admin\AdminPanelController@index')->name('adminPanel');
Route::get('/admin/forum', 'Admin\AdminPanelController@indexForum');
Route::post('/admin/forum', 'Forums\ForumController@store');
Route::get('/admin/forum/create', 'Forums\ForumController@create');
Route::post('/admin/category', 'Forums\CategoryController@store');

Route::get('/f', 'Forums\ForumController@index');

Route::get('/f/{forum}', 'Forums\ForumThreadController@index');
Route::get('/f/{forum}/create', 'Forums\ForumThreadController@create')->name('create-thread');
Route::post('/f/{forum}/create', 'Forums\ForumThreadController@store');

Route::get('/f/{forum}/t/{thread}', 'Forums\ThreadPostController@index')->name('view-thread');
Route::post('/f/{forum}/t/{thread}', 'Forums\ThreadPostController@store')->name('reply');
Route::get('/f/{forum}/t/{thread}/{post}/edit', 'Forums\ThreadPostController@edit')->name('edit-post');
Route::put('/f/{forum}/t/{thread}/{post}', 'Forums\ThreadPostController@update')->name('update-post');
