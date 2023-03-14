<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\AdminController;




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
// loadcontroller
Route::get('/', [LoadController::class,'index']);
Route::get('malecloth', [LoadController::class, 'malecloth']);
Route::get('femalecloth', [LoadController::class, 'femalecloth']);
Route::get('unisexcloth', [LoadController::class, 'unisexcloth']);
Route::get('about', [LoadController::class, 'about']);
Route::get('blog', [LoadController::class, 'blog']);
Route::get('contact', [LoadController::class, 'contact']);

//cartcontroller
Route::get('cart', [CartController::class, 'cart']);

//perfume controller
Route::get('perfume', [PerfumeController::class,'perfume']);

//admincontroller
Route::get('adduser', [AdminController::class,'adduser']);
Route::get('alluser', [AdminController::class,'alluser']);
Route::get('addfreeshipping', [AdminController::class,'addfreeshipping']);
Route::get('allfreeshipping', [AdminController::class,'allfreeshipping']);
Route::get('addproduct', [AdminController::class,'addproduct']);
Route::get('allproduct', [AdminController::class,'allproduct']);
Route::get('newarrival', [AdminController::class,'newarrival']);
Route::get('addnewarrival', [AdminController::class,'addnewarrival']);
Route::get('ordertable', [AdminController::class,'ordertable']);
Route::get('addfeaturedproduct', [AdminController::class,'addfeaturedproduct']);
Route::get('featuredproduct', [AdminController::class,'featuredproduct']);
Route::get('blogtable', [AdminController::class,'blogtable']);
Route::get('addblog', [AdminController::class,'addblog']);
Route::get('allcontact', [AdminController::class,'allcontact']);
Route::get('dashboard', [AdminController::class, 'dashboard']);
















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
