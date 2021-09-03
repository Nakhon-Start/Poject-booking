<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BuildingController;

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


Auth::routes();


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
//Route::get('/admin/home', [App\Http\Controllers\HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/', function () {
	return View('welcome');
});

Route::get('/admin', function () {
	return View('admin.index');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('history', function () {
		return view('pages.history');
	})->name('history');

	Route::get('/room', [RoomController::class, 'index'])->name('room');
	Route::post('/createRoom', [RoomController::class, 'createRoom'])->name('createRoom');

	Route::get('booking', [BookingController::class, 'index'])->name('booking');
	Route::post('createbooking', [BookingController::class, 'booking'])->name('createbooking');

	Route::get('search', function () {
		return view('pages.search');
	})->name('search');

	Route::get('responsibilities', function () {
		return view('pages.responsibilities');
	})->name('responsibilities');

	Route::get('/building', [BuildingController::class, 'index'])->name('building');
	Route::post('/createBuilding', [BuildingController::class, 'createBuilding'])->name('createBuilding');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
