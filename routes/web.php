<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;

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

//Route::get('/', [WelcomeController::class,'index']);
Route::get('/signup', [WelcomeController::class,'signup']);
Route::post('process',[WelcomeController::class,'process_signup'])->name('signup');
//Route::resource('/product',ProductController::class);
Route::get('/{page?}',[WelcomeController::class,'page']);