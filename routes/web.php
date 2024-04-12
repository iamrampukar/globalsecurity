<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Backend Developer.
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\NoticeWallController;

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

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/frontend.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
    /* Start: Backend Developers Code */
    Route::get('/banner/list', [BannerController::class, 'index'])->name('banner.list');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::get('/banner/show/{id}', [BannerController::class, 'show'])->name('banner.show');
    Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::post('/banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('/banner/destroy/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');

// Testimonial Route Block.
    Route::get('/client/list', [ClientController::class, 'index'])->name('client.list');
    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::get('/client/show/{id}', [ClientController::class, 'show'])->name('client.show');
    Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('/client/update/{id}', [ClientController::class, 'update'])->name('client.update');
    Route::get('/client/destroy/{id}', [ClientController::class, 'destroy'])->name('client.destroy');

    // Notice Wall Route Block.
    Route::get('/notice-wall/list', [NoticeWallController::class, 'index'])->name('notice_wall.list');
    Route::get('/notice-wall/create', [NoticeWallController::class, 'create'])->name('notice_wall.create');
    Route::get('/notice-wall/show/{id}', [NoticeWallController::class, 'show'])->name('notice_wall.show');
    Route::post('/notice-wall/store', [NoticeWallController::class, 'store'])->name('notice_wall.store');
    Route::get('/notice-wall/edit/{id}', [NoticeWallController::class, 'edit'])->name('notice_wall.edit');
    Route::post('/notice-wall/update/{id}', [NoticeWallController::class, 'update'])->name('notice_wall.update');
    Route::get('/notice-wall/destroy/{id}', [NoticeWallController::class, 'destroy'])->name('notice_wall.destroy');

// Success Story Route Block.
    Route::get('/team/list', [TeamController::class, 'index'])->name('team.list');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::get('/team/show/{id}', [TeamController::class, 'show'])->name('team.show');
    Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::get('/team/destroy/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

    Route::get('/faq/list', [FaqController::class, 'index'])->name('faq.list');
    Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::get('/faq/show/{id}', [FaqController::class, 'show'])->name('faq.show');
    Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
    Route::get('/faq/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
    Route::post('/faq/update/{id}', [FaqController::class, 'update'])->name('faq.update');
    Route::get('/faq/destroy/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
    /* Close: Backend Developers Code */

//    CLI Artisan.
    Route::get('/artisan-storage-link', function () {
        Artisan::call('vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations');
        Artisan::call('vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="config');
        Artisan::call('storage:link');
        dd('success');
    });
});
require __DIR__ . '/auth.php';
