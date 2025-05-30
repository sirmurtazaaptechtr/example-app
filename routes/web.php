<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CategoryController;

Route::get('/', [ViewController::class, 'index'])->name('home');

Route::get('/dashboard', [ViewController::class, 'show_dashboard'])->name('dashboard');

Route::get('/table', [ViewController::class, 'show_table'])->name('table');

Route::get('/posts/post/{post}/title/{title}', [ViewController::class, 'show_posts'])->whereNumber('post');

Route::resource('categories', CategoryController::class);

Route::prefix('user-page')->group(function () {
    Route::get('/about-us', [ViewController::class, 'show_about'])->name('about');
    
    Route::get('/contact-us', [ViewController::class, 'show_contact'])->name('contact');
});