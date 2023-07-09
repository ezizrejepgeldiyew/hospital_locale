<?php

use App\Http\Controllers\Admin\CitizenController;
use App\Http\Controllers\Admin\CitizensController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HospitalController;
use Illuminate\Support\Facades\Auth;
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

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});
Route::resources([
    'citizen' => CitizenController::class,
    'hospital' => HospitalController::class,
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
