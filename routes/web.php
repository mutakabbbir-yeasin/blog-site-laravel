<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\frontend\HomeController::class, 'index'])->name('frontend.home');
Route::get('blog',[App\Http\Controllers\frontend\BlogController::class, 'index'])->name('frontend.blog');
Route::get('blog/single-blog-post',[App\Http\Controllers\frontend\BlogController::class, 'show'])->name('frontend.single-blog-page');
Route::get('about',[App\Http\Controllers\frontend\AboutController::class, 'index'])->name('frontend.about');
Route::get('contact',[App\Http\Controllers\frontend\ContactController::class, 'index'])->name('frontend.contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
