<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PerfumeController;



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




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
