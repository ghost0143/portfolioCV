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

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontController::class, 'about'])->name('about');
Route::get('/competence', [App\Http\Controllers\FrontController::class, 'competence'])->name('competence');
Route::get('/portfolio', [App\Http\Controllers\FrontController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [App\Http\Controllers\FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'sendForm'])->name('contact.send');
