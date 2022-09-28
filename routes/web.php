<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class , 'services'])->name('services');
Route::get('/about', [HomeController::class , 'about'])->name('about');
Route::get('/contact', [HomeController::class , 'contact'])->name('contact');
Route::post('/submit', [HomeController::class, 'SubmitEmail'])->name('SubmitEmail');
});


Route::get('/admin', [DashboardController::class,'index'])->middleware('auth');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {


Route::get('/products', [ProductController::class,'index'])->name('product.index');
Route::get('/products/create', [ProductController::class,'create'])->name('product.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit']) ->name('product.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/banner', [BannerController::class,'index'])->name('banner.index');
Route::get('/banner/create', [BannerController::class,'create'])->name('banner.create');
Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
Route::get('/banner/{id}/edit', [BannerController::class, 'edit']) ->name('banner.edit');
Route::put('/banner/{id}', [BannerController::class, 'update'])->name('banner.update');
Route::delete('banner/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');

Route::get('/about', [AboutController::class,'index'])->name('about.index');
Route::get('/about/create', [AboutController::class,'create'])->name('about.create');
Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');
Route::get('/about/{id}/edit', [AboutController::class, 'edit']) ->name('about.edit');
Route::put('/about/{id}', [AboutController::class, 'update'])->name('about.update');
Route::delete('about/{id}', [AboutController::class, 'destroy'])->name('about.destroy');


Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
Route::get('/contact/create', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit']) ->name('contact.edit');
Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::delete('contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::get('/video', [VideoController::class,'index'])->name('video.index');
Route::get('/video/create', [VideoController::class,'create'])->name('video.create');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store');
Route::get('/video/{id}/edit', [VideoController::class, 'edit']) ->name('video.edit');
Route::put('/video/{id}', [VideoController::class, 'update'])->name('video.update');
Route::delete('video/{id}', [VideoController::class, 'destroy'])->name('video.destroy');






});





Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
