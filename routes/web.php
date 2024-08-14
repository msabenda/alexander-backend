<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;


// route to a website
Route::get('/', function () {
    return view('welcome');
});


// route to submit a form
Route::post('/contact-submit', [ContactController::class,'store'])->name('form.submit');