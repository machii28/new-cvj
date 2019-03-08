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


//Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

// Route::get('/', function () {

//     return view('home', [
//     	'foo' => 'Caterie Yo'
//     ]);
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);

	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

// Route::get('/events', 'EventsController@index')->name('events');

// Route::get('/inventory', 'InventoryController@show')->name('inventory');

});

// Route::get('/events', 'EventsController@index')->name('events');

// Route::get('/inventory', 'InventoryController@index')->name('inventory');

//Jeremy's Routess
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('inventory','InventoryController');
Route::resource('events', 'EventsController');
//Route::get('/inventory', ['as' => 'inventory.add', 'uses' => 'InventoryController@store']);
