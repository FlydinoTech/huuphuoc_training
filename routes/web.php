<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
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

Route::prefix("admin")->group(function(){
    Route::get('/',[AdminController::class,'index'])->name("admin.index");
    Route::resource('category', CategoryController::class);
    Route::get('/searchCategory',[CategoryController::class,'search'])->name('category.search');
    Route::resource('user', UserController::class);
    Route::get('/searchUser',[UserController::class,'search'])->name('user.search');
});
Route::prefix('auth')->group(function(){
    Route::get('/login', [AuthController::class,'login'])->name('auth.login');
});