<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'IdeasController@index')->name('home');
Route::get('/user/ideas','IdeasController@getIdeas');

Route::middleware('auth')->group(function(){

	  // Route::get('/', 'IdeasController@index')->name('home');

});

Route::prefix('admin')->name('admin.')->middleware('can:manage_users')->group(function (){
	Route::resource('users', 'UserController', ['except' => ['show', 'create', 'store']]);
	Route::get('/', 'AdminController@index')->name('dashboard');

	// Route::get('/details', function(){
	// 	return [
	// 		Auth::user(),
	// 		auth()->user()->roles
	// 	];
	// });
  Route::resource('ideas', 'IdeasController', ['except' => ['show', 'edit', 'create', 'store']]);

});