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
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\NewsEventDashboardController;
use App\Http\Controllers\TransactionDashboardController;

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

Route::post('/search', [HomeController::class, 'search'])->name('search')->middleware('auth');

Route::get('/register', [RegisterController::class, 'show'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/promo', PromotionController::class);
Route::post('/promo', [PromotionController::class,'store'])->name('promo-store');
Route::delete('/promo', [PromotionController::class,'destroy'])->name('promo-destroy');

Route::resource('/event', EventController::class);

Route::resource('/schedule', ScheduleController::class);

Route::resource('/srp', SrpController::class);

Route::get('/transaction/details', [TransactionController::class,'details_redirect'])->name('transaction-details-redirect');
Route::post('/transaction/details', [TransactionController::class,'details'])->name('transaction-details');

Route::resource('/transaction', TransactionController::class);


Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/transaction', TransactionDashboardController::class);
    Route::resource('/news-event', NewsEventDashboardController::class);
    // Route::resource('/promotion', TransactionDashboardController::class);
    Route::get('/promotion', function () {
        return view('dashboard.promotion');
    });
});
