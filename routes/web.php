<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::prefix("admin")->namespace("Admin")->group(function(){
    Route::get('/',[AdminController::class,'index'])->name("admin.index");
    Route::group(['prefix' => 'category'], function (){
        Route::get('/',[CategoryController::class,'index'])->name('admin.category.index');
        Route::get('/add',[CategoryController::class,'add'])->name('admin.category.add');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
    });
});