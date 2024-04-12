<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Backend Developer.
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PageGroupController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SuccessStoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\RequestInquiryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FeedbackController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Start: Frontend Developers Code */
Route::get('/', [HomeController::class, 'index'])->name('app.home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('app.about_us');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('app.contact_us');
Route::get('/country', [HomeController::class, 'country'])->name('app.country');
Route::get('/services', [HomeController::class, 'services'])->name('app.services');
Route::get('/blog', [HomeController::class, 'blog'])->name('app.blog');
Route::get('/success-story', [HomeController::class, 'successStory'])->name('app.success_story');
Route::get('/apply-now', [HomeController::class, 'applyNow'])->name('app.apply_now');
Route::get('/faq', [HomeController::class, 'faq'])->name('app.faq');
Route::post('/apply-send', [RequestInquiryController::class, 'store'])->name('app.apply_send');
Route::get('/blog/detail/{slug}', [HomeController::class, 'blogDetail'])->name('app.blog_slug');

Route::get('/visitor-feedbacks', [HomeController::class, 'visitorFeedback'])->name('app.visitor_feedback');
Route::post('/send-feedbacks', [HomeController::class, 'sendFeedback'])->name('app.send_feedback');
/* Close: Frontend Developers Code */

Route::middleware('auth')->group(function () {
    /* Start: Backend Developers Code */
    Route::get('/banner/list', [BannerController::class, 'index'])->name('banner.list');
    Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::get('/banner/show/{id}', [BannerController::class, 'show'])->name('banner.show');
    Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
    Route::post('/banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('/banner/destroy/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');

    Route::get('/page-group/list', [PageGroupController::class, 'index'])->name('page_group.list');
    Route::get('/page-group/create', [PageGroupController::class, 'create'])->name('page_group.create');
    Route::get('/page-group/show/{id}', [PageGroupController::class, 'show'])->name('page_group.show');
    Route::post('/page-group/store', [PageGroupController::class, 'store'])->name('page_group.store');
    Route::get('/page-group/edit/{id}', [PageGroupController::class, 'edit'])->name('page_group.edit');
    Route::post('/page-group/update/{id}', [PageGroupController::class, 'update'])->name('page_group.update');
    Route::get('/page-group/destroy/{id}', [PageGroupController::class, 'destroy'])->name('page_group.destroy');
    Route::get('/page-group/single-detail/{slug}', [PageGroupController::class, 'singleDetail'])->name('page_group.slug');
    Route::post('/page-group/single-update', [PageGroupController::class, 'singleDetailUpdate'])->name('page_group.single_update');

// Testimonial Route Block.
    Route::get('/testimonial/list', [TestimonialController::class, 'index'])->name('testimonial.list');
    Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::get('/testimonial/show/{id}', [TestimonialController::class, 'show'])->name('testimonial.show');
    Route::post('/testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/testimonial/update/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/testimonial/destroy/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');

    // Notice Wall Route Block.
    Route::get('/notice-wall/list', [NoticeWallController::class, 'index'])->name('notice_wall.list');
    Route::get('/notice-wall/create', [NoticeWallController::class, 'create'])->name('notice_wall.create');
    Route::get('/notice-wall/show/{id}', [NoticeWallController::class, 'show'])->name('notice_wall.show');
    Route::post('/notice-wall/store', [NoticeWallController::class, 'store'])->name('notice_wall.store');
    Route::get('/notice-wall/edit/{id}', [NoticeWallController::class, 'edit'])->name('notice_wall.edit');
    Route::post('/notice-wall/update/{id}', [NoticeWallController::class, 'update'])->name('notice_wall.update');
    Route::get('/notice-wall/destroy/{id}', [NoticeWallController::class, 'destroy'])->name('notice_wall.destroy');

// Success Story Route Block.
    Route::get('/success-story/list', [SuccessStoryController::class, 'index'])->name('success_story.list');
    Route::get('/success-story/create', [SuccessStoryController::class, 'create'])->name('success_story.create');
    Route::get('/success-story/show/{id}', [SuccessStoryController::class, 'show'])->name('success_story.show');
    Route::post('/success-story/store', [SuccessStoryController::class, 'store'])->name('success_story.store');
    Route::get('/success-story/edit/{id}', [SuccessStoryController::class, 'edit'])->name('success_story.edit');
    Route::post('/success-story/update/{id}', [SuccessStoryController::class, 'update'])->name('success_story.update');
    Route::get('/success-story/destroy/{id}', [SuccessStoryController::class, 'destroy'])->name('success_story.destroy');

// Video Share Route.
    Route::get('/video/list', [VideoController::class, 'index'])->name('video.list');
    Route::get('/video/create', [VideoController::class, 'create'])->name('video.create');
    Route::get('/video/show/{id}', [VideoController::class, 'show'])->name('video.show');
    Route::post('/video/store', [VideoController::class, 'store'])->name('video.store');
    Route::get('/video/edit/{id}', [VideoController::class, 'edit'])->name('video.edit');
    Route::post('/video/update/{id}', [VideoController::class, 'update'])->name('video.update');
    Route::get('/video/destroy/{id}', [VideoController::class, 'destroy'])->name('video.destroy');

    Route::get('/request-inquiry/list', [RequestInquiryController::class, 'index'])->name('request_inquiry.list');
    Route::get('/request-inquiry/show/{id}', [RequestInquiryController::class, 'show'])->name('request_inquiry.show');

    Route::get('/feedbacks/list', [FeedbackController::class, 'index'])->name('feedback.list');
    Route::get('/feedbacks/show/{id}', [FeedbackController::class, 'show'])->name('feedback.show');

    Route::get('/blog/list', [BlogController::class, 'index'])->name('blog.list');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::get('/blog/show/{id}', [BlogController::class, 'show'])->name('blog.show');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
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
