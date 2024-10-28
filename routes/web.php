<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');


// Route::post('/contact-us', [ContactController::class, 'send'])->name('contact.send');
// Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio.clients');
