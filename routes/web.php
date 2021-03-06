<?php

use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\AdReportController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Client\AdController as ClientAdController;
use App\Http\Controllers\Client\AdReportController as ClientAdReportController;
use App\Http\Controllers\Client\DashboardController as ClientDashboardController;
use App\Http\Controllers\Staff\AdController as StaffAdController;
use App\Http\Controllers\Staff\AdReportController as StaffAdReportController;
use App\Http\Controllers\Staff\DashboardController as StaffDashboardController;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Admin routes
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'admin'],
], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('clients', ClientController::class);
    Route::resource('staffs', StaffController::class);
    Route::resource('ads', AdController::class);
    Route::resource('adreports', AdReportController::class);
});

Route::group([
    'prefix' => 'staff',
    'as' => 'staff.',
], function () {
    Route::get('/dashboard', [StaffDashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('ads', StaffAdController::class);
    Route::resource('adreports', StaffAdReportController::class);
});


Route::group([
    'prefix' => 'client',
    'as' => 'client.',
    'middleware' => ['auth', 'client'],
], function () {
    Route::get('/dashboard', [ClientDashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('ads', ClientAdController::class);
    Route::resource('adreports', ClientAdReportController::class);
});
