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
<<<<<<< HEAD
// Route::get('/about', 'PagesController@about');
// Route::get('/contact', 'PagesController@contact');
=======
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
>>>>>>> 05ea29b3dced9d73d915557c11c02f485bb90139

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

<<<<<<< HEAD
// Route::get('/', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 05ea29b3dced9d73d915557c11c02f485bb90139

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);

	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

<<<<<<< HEAD
// Route::get('/events', 'EventsController@index')->name('events');

// Route::get('/inventory', 'InventoryController@show')->name('inventory');
=======
Route::get('/events', 'EventsController@index')->name('events');
>>>>>>> 05ea29b3dced9d73d915557c11c02f485bb90139

});

// Route::get('/events', 'EventsController@index')->name('events');

// Route::get('/inventory', 'InventoryController@index')->name('inventory');

//Jeremy's Routess
Route::get('/', 'InventoryHomeController@index')->name('home');
Route::get('/home', 'InventoryHomeController@index')->name('home');

Route::get('inventory/return', 'InventoryController@return');
//Route::get('inventory/view/{$id}', 'InventoryController@updateInfo');
Route::get('inventory/view/{$id}', 'InventoryController@updateInfo');
Route::get('inventory/deploy', 'InventoryController@deploy');
// Route::get('inventory/view/{id}', function ($id) {
// 	return redirect()->route( 'inventory.updateInfo' )->with( [ 'id' => $id ] ); 
// });
// Route::get('inventory/view/{id}', function ($id) {
//     return redirect()->route( 'inventory.view' )->with( [ 'id' => $id ] );
// });
Route::resource('inventory','InventoryController');
Route::resource('deploy','DeployInventoryController');
Route::resource('events', 'EventsController');
Route::resource('/roset', 'Roset');
Route::resource('calendar', 'Calendar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
