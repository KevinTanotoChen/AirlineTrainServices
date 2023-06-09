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
use App\Http\Controllers\PromotionDashboardController;
use App\Http\Controllers\TransactionDashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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

Route::resource('/srp', SrpController::class)->middleware('auth');

Route::get('/transaction/details', [TransactionController::class,'details_redirect'])->middleware('auth')->name('transaction-details-redirect');
Route::post('/transaction/details', [TransactionController::class,'details'])->middleware('auth')->name('transaction-details');

Route::resource('/transaction', TransactionController::class)->middleware('auth');

Route::get('/view-transactions', [TransactionController::class,'view_index'])->middleware('auth')->name('transaction-view');


Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware('admin');
    Route::resource('/transaction', TransactionDashboardController::class)->middleware('admin');
    Route::resource('/news-event', NewsEventDashboardController::class)->middleware('admin');
    Route::resource('/promotion', PromotionDashboardController::class)->middleware('admin');
});

Route::get('change-lang', function(Request $request){
    $lang = $request->lang;
    App::setLocale($lang);
    Session::put('lang',$lang);

    return redirect()->back();
})->name('change-lang');

