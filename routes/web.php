<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ipo;
use App\Models\Sme;
use App\Models\subscription;
use App\Models\Gmp;
use App\Models\CompanyDetails;
use App\Models\Review;
use App\Models\MarketNews;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\IpoController;
use App\Http\Controllers\SmeController;
use App\Http\Controllers\CompanyDetailController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MarketNewsController;
use App\Http\Controllers\GmpController;
use App\Http\Controllers\SubscriptionController;


Route::resource('companydetails', CompanyDetailController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('marketnews', MarketNewsController::class);




Route::resource('gmps', GmpController::class);



Route::middleware(['admin'])->group(function () {
    Route::resource('admin/ipos', IpoController::class);
    Route::resource('admin/smes', SmeController::class);
    Route::resource('admin/gmp', GmpController::class);
    Route::resource('admin/subscriptions', SubscriptionController::class);
    Route::resource('admin/companydetails', CompanyDetailController::class);
    Route::resource('admin/reviews', ReviewController::class);
    Route::resource('admin/marketnews', MarketNewsController::class);
});


Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('admin/ipos', IpoController::class);
    Route::resource('admin/smes', SmeController::class);
    Route::resource('admin/companydetails', CompanyDetailController::class);
    Route::resource('admin/reviews', ReviewController::class);
    Route::resource('admin/marketnews', MarketNewsController::class);
});





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

// Route::get('/admin/login', function () {
//     return view('login');
// });

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');



Route::get('/', function () {
    $ipos = Ipo::all();
    $smes = Sme::all();
    return view('index', ['ipos' => $ipos, 'smes' => $smes]);
});

Route::get('/gmp', function () {
    $gmps = Gmp::all();
    return view('gmp', ['gmps' => $gmps]);
});

Route::get('/reviews', function () {
    $reviews = Review::all();
    return view('reviews', ['reviews' => $reviews]);
});

Route::get('/companydetails', function () {
    $companyDetails = CompanyDetails::all();
    return view('companydetails', ['companyDetails' => $companyDetails]);
});

Route::get('/marketnews', function () {
    $marketnews = MarketNews::orderBy('date', 'desc')->get();
    return view('marketnews', ['marketnews' => $marketnews]);
});


Route::get('/subscription', function () {
    $companyData = subscription::all();
    return view('subscription', ['companyData' => $companyData]);
});

