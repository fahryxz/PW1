<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HewanController;
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
    return view('welcome');
});

Route::get('/test', function () {
    return view('test.index');
});

Route::resource('hewan', HewanController::class);
Route::resource('customer', CustomerController::class);
Route::resource('paket', PaketController::class);
Route::resource('staff', StaffController::class);