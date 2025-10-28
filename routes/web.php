<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('frontend.')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/how-it-works', [HomeController::class, 'howItWorks'])->name('how-it-works');
    Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/contact/submit', [HomeController::class, 'contactSubmit'])->name('contact.submit');
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/terms-and-conditions', [HomeController::class, 'termsConditions'])->name('terms-and-conditions');
    Route::get('/imprint', [HomeController::class, 'imprint'])->name('imprint');
});

