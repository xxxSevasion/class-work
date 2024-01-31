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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\FrontendController::class, 'about'])->name('about');

Route::prefix('/post')->group(function () {
    Route::get('/index', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::get('/edit/{post}', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::post('/store', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::put('/update/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    Route::delete('/delete/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');
});
Route::prefix('/category')->group(function () {
    Route::get('/index', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
    Route::delete('/delete/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('category.delete');
    Route::put('/update/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
});
