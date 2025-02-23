<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\MissionSectionController;
use App\Http\Controllers\Admin\ServiceSectionController;
use App\Http\Controllers\Admin\ClientSectionController;
use App\Http\Controllers\Admin\BlogSectionController;
use App\Http\Controllers\Admin\PictureController;
use App\Http\Controllers\Admin\TestimonialController;




// route to open a website
Route::get('/', [HomeController::class,'index'])->name('home');

// route to submit a form
Route::post('/contact-submit', [ContactController::class,'store'])->name('form.submit');

// route to open admin panel
Route::post('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/about', [AboutSectionController::class, 'index'])->name('admin.about.index');
    Route::put('/about/{id}', [AboutSectionController::class, 'update'])->name('admin.about.update');
});

Route::get('/about', [AboutSectionController::class, 'index']);

Route::get('/admin/mission', [MissionSectionController::class, 'index'])->name('admin.mission.index');
Route::put('/admin/mission', [MissionSectionController::class, 'update'])->name('admin.mission.update');

Route::prefix('admin')->group(function () {
    Route::get('/service/edit/{id}', [ServiceSectionController::class, 'edit'])->name('admin.service.edit');
    Route::put('/service/update/{id}', [ServiceSectionController::class, 'update'])->name('admin.service.update');
});

Route::get('/clients', [ClientSectionController::class, 'index'])->name('clients.index');

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('blog-sections', BlogSectionController::class);
});

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('pictures', [PictureController::class, 'index'])->name('pictures.index');
    Route::get('pictures/create', [PictureController::class, 'create'])->name('pictures.create');
    Route::post('pictures', [PictureController::class, 'store'])->name('pictures.store');
    Route::get('pictures/{picture}/edit', [PictureController::class, 'edit'])->name('pictures.edit');
    Route::put('pictures/{picture}', [PictureController::class, 'update'])->name('pictures.update');
    Route::delete('pictures/{picture}', [PictureController::class, 'destroy'])->name('pictures.destroy');
});

Route::prefix('admin')->middleware(['auth', 'is_admin'])->name('admin.')->group(function () {
    Route::resource('testimonials', TestimonialController::class);
});
