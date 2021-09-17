<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\BookingController;
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


Route::get('/', function () {
	return View('welcome');
});

Route::get('/admin', function () {
	return View('admin.index');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);

	//Building
	Route::post('setBuilding', [BuildingController::class, 'setBuilding'])->name('setBuilding');
	Route::get('listBuildings', [BuildingController::class, 'listBuilding'])->name('listBuildings');
	Route::get('/building', [BuildingController::class, 'index'])->name('building');
	Route::post('/createBuilding', [BuildingController::class, 'createBuilding'])->name('createBuilding');
	Route::post('setBuilding/page/{id}', [BuildingController::class, 'setBuildingPage'])->name('setBuildingPage');
	Route::post('setBuilding/{id}', [BuildingController::class, 'setBuilding'])->name('setBuilding');
	Route::get('getbuilding', [BuildingController::class, 'getbuilding']);
	//Room
	Route::get('/room', [RoomController::class, 'index'])->name('room');
	Route::get('listRooms', [RoomController::class, 'ListRoom'])->name('listRooms');
	Route::post('/createRoom', [RoomController::class, 'createRoom'])->name('createRoom');
	Route::post('setRoom/page/{id}', [RoomController::class, 'setRoomPage'])->name('setRoomPage');
	Route::post('setRoom/{id}', [RoomController::class, 'setRoom'])->name('setRoom');
	Route::post('/searchRoom', [RoomController::class, 'SearchForRoomsByTime'])->name('searchRoom');
	Route::post('/searchRoomId', [RoomController::class, 'SearchForAvailableRoom'])->name('searchRoomId');
	//Booking
	Route::get('history', [BookingController::class, 'history'])->name('history');
	Route::post('show', [BookingController::class, 'show'])->name('show');
	Route::get('listBooking', [BookingController::class, 'showListBooking'])->name('listBooking');
	Route::get('booking', [BookingController::class, 'index'])->name('booking');
	Route::post('bookingPage/{id}', [BookingController::class, 'bookingPage'])->name('bookingPage');
	Route::post('booking/page/{id}', [BookingController::class, 'bookingByRoomId'])->name('bookingByRoomId');
	Route::post('bookingByData', [BookingController::class, 'bookingByData'])->name('bookingByData');
	//approve
	Route::post('approve/page/{id}', [ApproveController::class, 'approvePage'])->name('approvePage');
	Route::post('approve/{id}', [ApproveController::class, 'approve'])->name('approve');

	Route::get('dashboard', function () {
		return view('pages.search');
	})->name('search');

	Route::get('check', function () {
		return view('pages.check');
	})->name('check');

	Route::get('responsibilities', [UserController::class, 'getlistChecker'])->name('responsibilities');

	Route::get('check', [UserController::class, 'getBuildingFormID'])->name('check');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
	
});
