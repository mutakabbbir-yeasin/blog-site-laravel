<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;

Route::get('/',[App\Http\Controllers\frontend\HomeController::class, 'index'])->name('frontend.home');

Route::get('blog',[App\Http\Controllers\frontend\BlogController::class, 'index'])->name('frontend.blog');

//to single blog post
Route::get('blog/single-blog-post',[App\Http\Controllers\frontend\BlogController::class, 'show'])->name('frontend.single-blog-page');

//to create blog post
Route::get('blog/create',[App\Http\Controllers\frontend\BlogController::class, 'create'])->name('frontend.blog.create');

//to store blog post to database
Route::post('blog/store',[App\Http\Controllers\frontend\BlogController::class, 'store'])->name('frontend.blog.store');

//to about page
Route::get('about',[App\Http\Controllers\frontend\AboutController::class, 'index'])->name('frontend.about');

//to contact page
Route::get('contact',[App\Http\Controllers\frontend\ContactController::class, 'index'])->name('frontend.contact');

//to dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
