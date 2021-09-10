<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Tour\TourController;
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
Route::group(['namespace' => 'tour'], function (){
	Route::get('/',[TourController::class,'index'])->name('tour.index');
});

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
});
