<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ViewController::class, 'show_dashboard'])->name('dashboard');

    Route::get('/table', [ViewController::class, 'show_table'])->name('table');

    Route::get('/posts/post/{post}/title/{title}', [ViewController::class, 'show_posts'])->whereNumber('post');

    Route::resource('categories', CategoryController::class);

    Route::prefix('user-page')->group(function () {
        Route::get('/about-us', [ViewController::class, 'show_about'])->name('about');
        
        Route::get('/contact-us', [ViewController::class, 'show_contact'])->name('contact');
    });
        
});