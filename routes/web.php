<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChiefController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\YammyController;
use App\Http\Controllers\AddMenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\AddChiefController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddGallaryController;
use App\Http\Controllers\TablesDashboardController;



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



Route::get('/',[YammyController::class,'index'] );
Route::get('/about',[AboutController::class,'index'] );
Route::get('/menu',[MenuController::class,'index'] );
Route::get('/contact',[ContactController::class,'index']);
Route::post('/contacts',[ContactController::class,'store']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/chief', [ChiefController::class, 'index']);
Route::get('/event', [EventController::class, 'index']);
Route::get('/book', [BookController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/tables', [TablesDashboardController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);
Route::get('/message', [MessageController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);


Route::middleware(['checkuser'])->group(function () {
    Route::get('/order', [OrderController::class, 'index']);
    Route::get('/message', [MessageController::class, 'index']);
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/addgallary', [AddGallaryController::class, 'index']);
    Route::post('/addgallarys', [AddGallaryController::class, 'store']);
    Route::get('/newchief', [AddChiefController::class, 'index']);
    Route::post('/addchiefs', [AddChiefController::class, 'store']);
    Route::get('/addmenu', [AddMenuController::class, 'index']);
    Route::post('/addmenus', [AddMenuController::class, 'store']);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
