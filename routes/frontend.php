<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/* Start: Frontend Developers Code */
Route::get('/', [HomeController::class, 'index'])->name('app.home');
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('app.about_us');
Route::get('services', [HomeController::class, 'services'])->name('app.services');
Route::get('our-client', [HomeController::class, 'outClient'])->name('app.our_client');
Route::get('our-team', [HomeController::class, 'ourTeam'])->name('app.our_team');
Route::get('gallery', [HomeController::class, 'gallery'])->name('app.gallery');
Route::get('faq', [HomeController::class, 'faq'])->name('app.faq');
Route::get('contact-us', [HomeController::class, 'contactUs'])->name('app.contact_us');
/* Close: Frontend Developers Code */

