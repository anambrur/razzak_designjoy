<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'homeView'])->name('homeView');
Route::get('/web_form', [FormController::class,'web_form'])->name('web_form');
Route::get('/logo_form', [FormController::class,'logo_form'])->name('logo_form');
Route::get('/marketing_form', [FormController::class,'marketing_form'])->name('marketing_form');

//store
Route::post('/logo_form_store', [FormController::class,'logo_form_store'])->name('logo_form_store');
Route::post('/web_form_store', [FormController::class,'web_form_store'])->name('web_form_store');
Route::post('/marketing_form_store', [FormController::class,'marketing_form_store'])->name('marketing_form_store');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




//////backend
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('/header', HeaderController::class)->names('header');
    Route::get('/booking', [HeaderController::class,'booking'])->name('booking');

    //form data
    Route::get('/web_form_data',[FormController::class,'web_form_data'])->name('web_form_data');
    Route::get('/logo_form_data',[FormController::class,'logo_form_data'])->name('logo_form_data');
    Route::get('/marketing_form_data',[FormController::class,'marketing_form_data'])->name('marketing_form_data');
    
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';




