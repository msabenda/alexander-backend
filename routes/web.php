<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;



// route to open a website
Route::get('/', [HomeController::class,'index'])->name('home');

// route to submit a form
Route::post('/contact-submit', [ContactController::class,'store'])->name('form.submit');

// route to open admin panel
Route::post('/admin', [AdminController::class, 'index'])->name('admin.index');
