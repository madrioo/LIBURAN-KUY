<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelPackageController;
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
    return view('pages.home');
});

Route::get('/detail', function () {
    return view('pages.detail');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/checkout/success', function () {
    return view('pages.success');
});

Route::get('admin', [DashboardController::class, 'index'])->middleware(['auth','admin'])->name('admin');
Route::resource('travel-package', TravelPackageController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('transaction', TransactionController::class);

Auth::routes(['verify' => true]);
