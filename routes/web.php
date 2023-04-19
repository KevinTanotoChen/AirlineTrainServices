<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\SrpController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;

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

Route::resource('/', HomeController::class);

Route::get('/register', [RegisterController::class, 'show'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'show'])->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/promo', PromotionController::class);

Route::resource('/event', EventController::class);

Route::resource('/schedule', ScheduleController::class);

Route::resource('/srp', SrpController::class);

Route::post('/search', [HomeController::class, 'search'])->name('search');

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/transaction', function () {
    return view('transaction');
});

Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/load/{id}', function ($id) {
    if ($id == 'transaction-link') {
        return view('dashboard.transaction');
    } else if ($id == 'news-link') {
        return view('dashboard.event');
    } else if ($id == 'promotion-link') {
        return view('dashboard.promotion');
    }
});
