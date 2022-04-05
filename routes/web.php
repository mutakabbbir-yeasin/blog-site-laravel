<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\frontend\HomeController::class, 'index']);
Route::get('blog',[App\Http\Controllers\frontend\BlogController::class, 'index']);
Route::get('blog/single-blog-post',[App\Http\Controllers\frontend\BlogController::class, 'show']);
Route::get('about',[App\Http\Controllers\frontend\AboutController::class, 'index']);
Route::get('contact',[App\Http\Controllers\frontend\ContactController::class, 'index']);


