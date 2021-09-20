<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookTourController;
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

Route::prefix('auth')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('auth.register');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/error', [AuthController::class, 'error'])->name('auth.error');
});

Route::prefix('admin')->middleware('admin', 'auth')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name("admin.index");
    Route::resource('category', CategoryController::class);
    Route::get('/searchCategory',[CategoryController::class,'search'])->name('category.search');
    Route::resource('tour', TourController::class);
    Route::get('/searchTour',[TourController::class,'search'])->name('tour.search');
    Route::resource('user', UserController::class, ['only' => ['index']]);
    Route::resource('user', UserController::class, ['except' => ['index']])->middleware('admin-manager');
    Route::get('/searchUser',[UserController::class,'search'])->name('user.search');
    Route::get('error',[UserController::class,'error'])->name('admin.error');
});

Route::group(['namespace' => 'booktour'], function (){
    Route::get('/',[BookTourController::class,'index'])->name('booktour.index');
    Route::get('/category/{id}',[BookTourController::class,'categoryTour'])->name('booktour.category_tour');
    Route::get('/booktour/{id}',[BookTourController::class,'bookTour'])->name('booktour.book_tour');
    Route::get('/all_tour',[BookTourController::class,'allTour'])->name('booktour.all_tour');
    Route::get('/shop',[BookTourController::class,'shop'])->name('booktour.shop');
    Route::get('/product',[BookTourController::class,'product'])->name('booktour.product');
    Route::get('/cart',[BookTourController::class,'cart'])->name('booktour.cart');
    Route::get('/checkout',[BookTourController::class,'checkout'])->name('booktour.checkout');
    Route::get('/contact',[BookTourController::class,'contact'])->name('booktour.contact');
    Route::get('/about_us',[BookTourController::class,'aboutUs'])->name('booktour.about_us');
    Route::get('/error',[BookTourController::class,'error'])->name('booktour.error');
});
