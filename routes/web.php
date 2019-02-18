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

//Binding
Route::bind('user', 'App\User');
Route::bind('character', 'App\Models\Character\Character');
Route::bind('pcharacter', 'App\Models\PendingCharacter\Character');

// Docs/static pages with guest views
Route::get('/site/terms', 'DocsController@terms')->name('terms');
Route::get('/site/rules', 'DocsController@rules')->name('rules');
Route::get('/site/privacy', 'DocsController@privacy')->name('privacy');


// Dashboard/home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Admin Panel
Route::get('/admin', 'Admin\AdminPanelController@index')->name('adminPanel');

// Admin Forum
Route::get('/admin/forums', 'Admin\AdminPanelController@indexForum')->name('admin-forums');
Route::post('/admin/forums', 'Forums\ForumController@store')->name('admin-store-forum');
Route::get('/admin/forums/create', 'Forums\ForumController@create')->name('admin-create-forum');

Route::post('/admin/categories', 'Forums\CategoryController@store')->name('admin-store-category');

// Admin character
Route::get('/admin/character', 'Admin\AdminCharacterController@index')->name('admin-character-list');
Route::get('/admin/character/{character}/edit', 'Admin\AdminCharacterController@edit')->name('admin-edit-character');

Route::get('/admin/ranks', 'Character\RankController@index')->name('admin-ranks');
Route::get('/admin/ranks/create', 'Character\RankController@create')->name('admin-create-rank');
Route::post('/admin/ranks', 'Character\RankController@store')->name('admin-store-rank');

Route::get('/admin/factions', 'Character\FactionController@index')->name('admin-factions');
Route::post('/admin/factions', 'Character\FactionController@store')->name('admin-store-faction');

Route::get('/admin/pending', 'Character\PendingCharacterController@index')->name('admin-view-pending-characters');
Route::get('admin/pending/{pcharacter}', 'Character\PendingCharacterController@show')->name('admin-show-pending-character');
Route::put('/admin/pending/{pcharacter}', 'Character\PendingCharacterController@update')->name('admin-pend-character');

// Invitations
Route::get('/invites', 'InvitationController@index')->name('my-invites');
Route::post('/invites', 'InvitationController@store')->name('generate-invite');

// Forums
Route::get('/f', 'Forums\ForumController@index');
Route::get('/forums', 'Forums\ForumController@index');


Route::get('/f/{forum}', 'Forums\ForumThreadController@index')->name('view-forum');
Route::get('/forums/{fid}', 'Forums\ForumThreadController@index');

Route::get('/f/{forum}/create', 'Forums\ForumThreadController@create')->name('create-thread');
Route::post('/f/{forum}/create', 'Forums\ForumThreadController@store');


Route::get('/f/{forum}/t/{thread}/edit', 'Forums\ForumThreadController@edit')->name('edit-thread');
Route::put('/f/{forum}/t/{thread}/update', 'Forums\ForumThreadController@update')->name('update-thread');
Route::get('/f/{forum}/t/{thread}', 'Forums\ThreadPostController@index')->name('view-thread');
Route::get('/f/{forum}/thread/{tid}', 'Forums\ThreadPostController@index');

Route::post('/f/{forum}/t/{thread}', 'Forums\ThreadPostController@store')->name('reply');
Route::delete('/f/{forum}/t/{thread}', 'Forums\ForumThreadController@delete')->name('delete-thread');
Route::get('/f/{forum}/t/{thread}/{post}/edit', 'Forums\ThreadPostController@edit')->name('edit-post');

Route::post('/f/{forum}/t/{thread}/subscription', 'Forums\ThreadSubscriptionsController@store')->name('subscribe-to-thread');
Route::delete('/f/{forum}/t/{thread}/subscription', 'Forums\ThreadSubscriptionsController@destroy')->name('unsubscribe-from-thread');

Route::put('/f/{forum}/t/{thread}/{post}/update', 'Forums\ThreadPostController@update')->name('update-post');
Route::delete('/f/{forum}/t/{thread}/{post}', 'Forums\ThreadPostController@delete')->name('delete-post');
Route::get('/f/{forum}/t/{thread}/{post}/history', 'AuditController@post')->name('post-history');

// Users
Route::get('/u', 'UserController@index')->name('user-list');
Route::get('/u/{user}', 'UserController@show')->name('user-profile');
Route::get('/u/{user}/pc', 'Character\UserPendingCharacterController@index')->name('view-pending-characters');

Route::get('/u/{user}/edit', 'UserController@edit')->name('edit-user');
Route::put('/u/{user}/update', 'UserController@update')->name('update-user');
Route::put('/u/{user}/graphics', 'GraphicsController@update')->name('update-user-graphics');

// Notifications
Route::get('/notifications','User\UserNotificationsController@index')->name('my-notifications');
Route::delete('/notifications/{notification}','User\UserNotificationsController@destroy')->name('delete-notification');

// Characters
Route::get('/c', 'Character\CharacterController@index')->name('character-list');
Route::post('/c/create', 'Character\CharacterController@store')->name('store-new-character');
Route::put('/c/current', 'Character\CharacterController@switch')->name('switch-character');
Route::get('/c/{character}','Character\CharacterController@show')->name('character-profile');
Route::get('/c/{character}/edit', 'Character\CharacterController@edit')->name('edit-character');
Route::put('/c/{character}/update', 'Character\CharacterController@update')->name('update-character');
Route::put('/c/{character}/graphics', 'GraphicsController@update')->name('update-character-graphics');

// Pending characters
Route::get('/pc', 'Character\UserPendingCharacterController@index')->name('view-my-pending-characters');
Route::get('/pc/create', 'Character\PendingCharacterController@create')->name('create-character');
Route::post('/pc/create', 'Character\PendingCharacterController@store')->name('store-pending-character');
Route::get('/pc/{pcharacter}', 'Character\UserPendingCharacterController@show')->name('show-pending-character');
Route::get('/pc/{pcharacter}/edit', 'Character\UserPendingCharacterController@edit')->name('edit-pending-character');
Route::put('/pc/{pcharacter}/update', 'Character\UserPendingCharacterController@update')->name('update-pending-character');

