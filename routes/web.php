<?php

<<<<<<< HEAD
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
=======
use App\Http\Controllers\Auth\AuthController;
>>>>>>> a8c78b5 (UI_login)
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
});
Route::prefix('auth')->group(function(){
    Route::get('/login', [AuthController::class,'login'])->name('auth.login');
});