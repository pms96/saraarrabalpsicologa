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

// Route::get('/', [HomeController::class, 'home'])->name('home');
// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
// Route::get('/about', [HomeController::class, 'about'])->name('about');
// Route::get('/blog', [PostController::class, 'home'])->name('blog');
// Route::get('/search', [PostController::class, 'search'])->name('search');
// Route::get('/about-us', [SiteController::class, 'about'])->name('about-us');
// Route::get('/category/{category:slug}', [PostController::class, 'byCategory'])->name('by-category');
// Route::get('/{post:slug}', [PostController::class, 'show'])->name('view');

Route::middleware('auth')->group(function () {
    require __DIR__.'/optionbuilder.php';   
    require __DIR__.'/pagebuilder.php';
});
