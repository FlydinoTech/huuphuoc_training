<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Room\RoomController;
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
Route::group(['namespace' => 'room'], function (){
	Route::get('/',[RoomController::class,'index'])->name('room.index');
    Route::get('/tour',[RoomController::class,'tour'])->name('room.tour');
    Route::get('/booktour',[RoomController::class,'booktour'])->name('room.booktour');
    Route::get('/team',[RoomController::class,'team'])->name('room.team');
    Route::get('/blog',[RoomController::class,'blog'])->name('room.blog');
    Route::get('/aboutUs',[RoomController::class,'about'])->name('room.about');
    Route::get('/err404',[RoomController::class,'error'])->name('room.404');
    Route::get('/comming-soon',[RoomController::class,'comming'])->name('room.comming');
    Route::get('/shop',[RoomController::class,'shop'])->name('room.shop');
    Route::get('/cat_tour',[RoomController::class,'catTour'])->name('room.cat_tour');
});

Route::group(['namespace' => 'auth'], function (){
	Route::get('/login',[AuthController::class,'login'])->name('auth.login');
    Route::get('/register',[AuthController::class,'register'])->name('auth.register');
});

Route::prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::group(['prefix' => 'cat'], function (){
        Route::get('/',[CategoryController::class,'index'])->name('admin.cat.index');

        Route::get('/add',[CategoryController::class,'add'])->name('admin.cat.add');
        // Route::post('/add',[CategoryController::class,'postAdd'])->name('admin.cat.add')->middleware('role:admin|vinaenter');

        Route::get('/edit',[CategoryController::class,'edit'])->name('admin.cat.edit');
        // Route::post('/edit/{id}',[CategoryController::class,'postEdit'])->name('admin.cat.edit')->middleware('role:admin|vinaenter');;

        // Route::get('/del/{id}',[CategoryController::class,'del'])->name('admin.cat.del')->middleware('role:admin|vinaenter');

        Route::get('/search',[CategoryController::class,'search'])->name('admin.cat.search');
    });
    Route::group(['prefix' => 'tour'], function (){
        Route::get('/',[TourController::class,'index'])->name('admin.tour.index');

        Route::get('/add',[TourController::class,'add'])->name('admin.tour.add');
        // Route::post('/add',[CategoryController::class,'postAdd'])->name('admin.cat.add')->middleware('role:admin|vinaenter');

        Route::get('/edit',[TourController::class,'edit'])->name('admin.tour.edit');
        // Route::post('/edit/{id}',[CategoryController::class,'postEdit'])->name('admin.cat.edit')->middleware('role:admin|vinaenter');;

        Route::get('/del',[TourController::class,'del'])->name('admin.tour.del');

        Route::get('/search',[TourController::class,'search'])->name('admin.tour.search');
    });
    Route::group(['prefix' => 'user'], function (){
        Route::get('/',[UsersController::class,'index'])->name('admin.user.index');

        Route::get('/add',[UsersController::class,'add'])->name('admin.user.add');
        // Route::post('/add',[CategoryController::class,'postAdd'])->name('admin.cat.add')->middleware('role:admin|vinaenter');

        Route::get('/edit',[UsersController::class,'edit'])->name('admin.user.edit');
        // Route::post('/edit/{id}',[CategoryController::class,'postEdit'])->name('admin.cat.edit')->middleware('role:admin|vinaenter');;

        Route::get('/del',[UsersController::class,'del'])->name('admin.user.del');

        Route::get('/search',[UsersController::class,'search'])->name('admin.user.search');
    });

});