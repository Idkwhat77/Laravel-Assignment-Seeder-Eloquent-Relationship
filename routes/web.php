<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');