<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',function()
{
    return view('main');
});



Route::get('/admin_login',[LoginController::class,'admin_login'])->name('admin.login');
Route::post('/do_admin_login',[LoginController::class,'do_admin_login'])->name('do.admin_login');

Route::get('/admin_logout',[LoginController::class,'admin_logout'])->name('admin.logout');

Route::get('/admin_dash',[PageController::class,'admin_dash'])->name('admin.dash');
Route::get('/admin_profile',[PageController::class,'admin_profile'])->name('admin.profile');

Route::get('/car_reg',[PageController::class,'car_reg'])->name('car.reg');
Route::post('/do_car_reg',[DatabaseController::class,'do_car'])->name('do.car');

Route::get('/view_car',[PageController::class,'view_car'])->name('view.car');



Route::get('/view_bookings',[PageController::class,'view_bookings'])->name('view.bookings');




    
Route::get('/',[PageController::class,'index'] )->name('index');
Route::get('/show_register',[PageController::class,'show_register'])->name('show.register');
Route::post('/do_user_register',[DatabaseController::class,'do_user_register'])->name('do.user_register');



Route::get('/index',[PageController::class,'index'])->name('user.index');

Route::get('/car_search',[DatabaseController::class,'car_search'])->name('car.search');

Route::get('/booknow/{id}',[PageController::class,'booknow'])->name('booknow');
Route::post('/dobook',[DatabaseController::class,'dobook'])->name('do.book');

Route::get('/payment',[PageController::class,'payment'])->name('payment');
Route::post('/dopay',[DatabaseController::class,'dopay'])->name('dopay');



Route::get('/show_login',[LoginController::class,'show_login'])->name('show.login');
Route::post('/do_login',[LoginController::class,'do_login'])->name('do.login');

Route::get('/user_logout',[LoginController::class,'user_logout'])->name('user.logout');