<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
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

Route::get('/plantilla/home', [HomeController::class, 'home'])->name('home');
Route::get('/plantilla/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/plantilla/about', [HomeController::class, 'about'])->name('about');
Route::get('/plantilla/blog', [PostController::class, 'home'])->name('blog');
Route::get('/plantilla/search', [PostController::class, 'search'])->name('search');
Route::get('/plantilla/about-us', [SiteController::class, 'about'])->name('about-us');
Route::get('/plantilla/category/{category:slug}', [PostController::class, 'byCategory'])->name('by-category');
Route::get('/plantilla/{post:slug}', [PostController::class, 'show'])->name('view');

Route::middleware('auth')->group(function () {
    require __DIR__.'/optionbuilder.php';   
});
require __DIR__.'/pagebuilder.php';
