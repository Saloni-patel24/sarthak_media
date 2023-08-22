<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\BlogController;

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


Route::get('/',[IndexController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/services',[ServiceController::class,'index']);
Route::get('/work',[WorkController::class,'index']);
Route::get('/work-details',[WorkController::class,'detail']);
Route::get('/service-details',[ServiceController::class,'detail']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/blog-details',[BlogController::class,'detail']);

Route::get('/career', function () {
    print_r('Career');
});
