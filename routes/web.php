<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\HomeController;
use App\Models\User;

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


Route::group(['middleware' => 'auth'], function () {
	Route::get('calenarEvents', [BookingController::class, 'ShowListOfApprovedReservations']);
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('user', [UserController::class, 'index'])->name('user');
	Route::post('setUser', [UserController::class, 'SetUser'])->name('setuser');
	//Building
	Route::post('setBuilding', [BuildingController::class, 'setBuilding'])->name('setBuilding');
	Route::get('listBuildings', [BuildingController::class, 'listBuilding'])->name('listBuildings');
	Route::get('/building', [BuildingController::class, 'index'])->name('building');
	Route::post('/createBuilding', [BuildingController::class, 'createBuilding'])->name('createBuilding');
	Route::post('setBuilding/page/{id}', [BuildingController::class, 'setBuildingPage'])->name('setBuildingPage');
	Route::post('setBuilding', [BuildingController::class, 'setBuilding'])->name('setBuilding');
	Route::get('getbuilding', [BuildingController::class, 'getbuilding']);
	//Room
	Route::get('/room', [RoomController::class, 'index'])->name('room');
	Route::get('getEvents', [RoomController::class, 'getEvents'])->name('getEvents');
	Route::get('listRooms', [RoomController::class, 'ListRoom'])->name('listRooms');
	Route::post('/createRoom', [RoomController::class, 'createRoom'])->name('createRoom');
	Route::post('setRoom', [RoomController::class, 'setRoom'])->name('setRoom');
	
	
	Route::post('/searchRoomId', [RoomController::class, 'SearchForAvailableRoom'])->name('setRoom');
	Route::post('/searchRoom', [RoomController::class, 'ShowListOfApprovedReservations'])->name('searchRoom');
	
	//Booking
	Route::get('history', [BookingController::class, 'history'])->name('history');
	Route::get('/calerdar', [BookingController::class, 'calendar'])->name('calerdar');
	Route::get('/calenarEvents', [BookingController::class, 'calenarEvents'])->name('calenarEvents');	
	Route::post('show', [BookingController::class, 'show'])->name('show');
	Route::get('listBooking', [BookingController::class, 'showListBooking'])->name('listBooking');
	Route::get('bookingByRoom', [BookingController::class, 'bookingByRoom'])->name('bookingByRoom');
	Route::post('booking', [BookingController::class, 'booking'])->name('booking');
	Route::post('setBooking', [BookingController::class, 'setBooking'])->name('setBooking');
	Route::post('/searchBuild', [HomeController::class, 'searchBuild'])->name('searchBuild');

	//approve
	Route::post('approve', [BookingController::class, 'approve'])->name('approve');
	Route::post('cancle', [BookingController::class, 'cancle'])->name('cancle');

	Route::get('dashboard', [HomeController::class, 'search'])->name('search');

	Route::get('check', function () {
		return view('pages.check');
	})->name('check');

	Route::get('detail', function () {
		return view('pages.detail');
	})->name('detail');

	Route::get('appoveHistory',[BookingController::class, 'appoveHistory'])->name('appoveHistory');

	Route::get('check', function () {
		return view('pages.bookingb');
	})->name('check');

	Route::get('responsibilities', [UserController::class, 'getlistChecker'])->name('responsibilities');
	Route::post('createResponsibilities', [UserController::class, 'createResponsibilities'])->name('createResponsibilities');

	Route::get('check', [UserController::class, 'getBuildingFormID'])->name('check');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
	
});
