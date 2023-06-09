<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StaffController;
use App\Models\Hewan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.main');
});

Route::get('/test', function () {
    return view('test.index');
});

Route::resource('hewan', HewanController::class);
Route::resource('customer', CustomerController::class);
Route::resource('paket', PaketController::class);
Route::resource('staff', StaffController::class);
Route::resource('room', RoomController::class);
Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard');