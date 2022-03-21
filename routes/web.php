<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PortfolioDetailsController;
use App\Http\Controllers\ResumeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/resume', [ResumeController::class, 'index'])->name('resume');

Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/portfolio-details', [PortfolioDetailsController::class, 'index'])->name('portfolio-details');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
