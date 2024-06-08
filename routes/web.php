<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'homeView']);
Route::get('/web_form', [FormController::class,'web_form'])->name('web_form');
Route::get('/logo_form', [FormController::class,'logo_form'])->name('logo_form');
Route::post('/logo_form_store', [FormController::class,'logo_form_store'])->name('logo_form_store');
Route::post('/web_form_store', [FormController::class,'web_form_store'])->name('web_form_store');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('/header', HeaderController::class)->names('header');
    
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';




// class FormController extends Controller
// {
//     public function web_form()
//     {
//         return view('form.web_form');
//     }
//     public function logo_form()
//     {
//         return view('form.logo_form');
//     }
//     public function logo_form_store(Request $request)
//     {
//         dd($request->all());
//         return view('form.logo_form');
//     }
//     public function web_form_store(Request $request)
//     {
//         dd($request->all());
//         return view('form.logo_form');
//     }
// }