<?php

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
// Открытие главной страницы
//Route::get('/', function () {
//    return view('welcome');
//});
// Открытие страницы о нас
//Route::get('/about', function () {
//   return view('about');
//});
Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/portfolio', [\App\Http\Controllers\FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/price', [\App\Http\Controllers\FrontendController::class, 'price'])->name('price');
Route::get('/contact', [\App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
