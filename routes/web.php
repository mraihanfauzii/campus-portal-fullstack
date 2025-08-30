<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman Statis
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Halaman Berita
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{post:slug}', [PageController::class, 'newsDetail'])->name('news.detail');

// Halaman Kegiatan
Route::get('/activities', [PageController::class, 'activities'])->name('activities');
Route::get('/activities/{activity:slug}', [PageController::class, 'activityDetail'])->name('activities.detail');

// Handle Form Kontak
Route::post('/contact', [PageController::class, 'handleContactForm'])->name('contact.submit');
