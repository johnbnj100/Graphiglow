<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\GraduateController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\CtpController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\JotterController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\FlyerController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\Sav;
use App\Http\Middleware\Mywedding;
use App\Http\Middleware\Mycard;
use App\Http\Middleware\Myflyer;
use App\Http\Middleware\Mybusiness;
use App\Http\Middleware\Mychurch;
use App\Http\Middleware\Mycalender;
use App\Http\Middleware\Mylogo;
use App\Http\Middleware\Myctp;
use App\Http\Middleware\Mypackage;
use App\Http\Middleware\Mygraduate;
use App\Http\Middleware\Myjotter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!p
|
*/


Route::get('/', [ProductController::class, 'index']);

Route::get('/banner', [ProductController::class, 'banner']);

Route::get('/userdetails', [ProductController::class, 'userdetails'])->middleware(Sav::class);

Route::get('/logodetails', [LogoController::class, 'details0'])->middleware(Mylogo::class);

Route::get('/ctpdetails', [CtpController::class, 'details1'])->middleware(Myctp::class);

Route::get('/packagedetails', [PackageController::class, 'details2'])->middleware(Mypackage::class);

Route::get('/graduatedetails', [GraduateController::class, 'details3'])->middleware(Mygraduate::class);

Route::post('/storage', [ProductController::class, 'store']);

Route::post('/embroidery', [LogoController::class, 'storelogo']);

Route::post('/storectp', [CtpController::class, 'storectp']);

Route::post('/package', [PackageController::class, 'package']);

Route::get('/ctp', [CtpController::class, 'ctp']);

Route::get('/logo', [LogoController::class, 'logo']);

Route::get('/packaging', [PackageController::class, 'packaging']);

Route::get('/graduation', [GraduateController::class, 'graduation']);

Route::post('/graduate', [GraduateController::class, 'graduate']);

Route::get('/business', [BusinessController::class, 'business']);

Route::get('/businessdetails', [BusinessController::class, 'details8'])->middleware(Mybusiness::class);

Route::post('/business2', [BusinessController::class, 'business2']);

Route::get('/jotter', [JotterController::class, 'jotter']);

Route::post('/jotters', [JotterController::class, 'jotters']);

Route::get('/jotter-details', [JotterController::class, 'Jotterdetail'])->middleware(Myjotter::class);

Route::get('/church', [ChurchController::class, 'church']);

Route::get('/churchdetails', [ChurchController::class, 'details6'])->middleware(Mychurch::class);

Route::post('/churchs', [ChurchController::class, 'churchs']);

Route::get('/wedding', [WeddingController::class, 'wedding']);

Route::get('/weddingdetails', [WeddingController::class, 'details7'])->middleware(Mywedding::class);

Route::post('/weddings', [WeddingController::class, 'weddings']);

Route::get('/card', [ServicesController::class, 'card']);

Route::get('/card-details', [ServicesController::class, 'bcard'])->middleware(Mycard::class);

Route::post('/cards', [ServicesController::class, 'cards']);

Route::get('/calendar', [CalendarController::class, 'calendar']);

Route::get('/calendar-details', [CalendarController::class, 'Calender'])->middleware(Mycalender::class);

Route::post('/calendars', [CalendarController::class, 'calendars']);

Route::get('/flyer', [FlyerController::class, 'flyer']);

Route::get('/flyer-details', [FlyerController::class, 'flyerdetail'])->middleware(Myflyer::class);

Route::post('/flyers', [FlyerController::class, 'flyers']);

Route::get('/signup', [SignupController::class, 'signup'])->name('signup');

Route::post('/store', [SignupController::class, 'store']);

Route::get('/signin', [SigninController::class, 'signin'])->middleware('guest');

Route::post('/payment', [PaymentController::class, 'payment']);

Route::post('/logout', [SigninController::class, 'logout'])->middleware('auth');

Route::post('/signin/authenticate', [SigninController::class, 'authenticate']);

?>
