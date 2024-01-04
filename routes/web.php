<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactSendController;

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

Route::get('/', HomeController::class)->name('home');
Route::get('/works', WorksController::class)->name('works');
Route::get('/works/{work}', WorkController::class)->name('work');
Route::get('/contact', ContactController::class)->name('contact');
Route::post('/contact', ContactSendController::class)->name('contact.send');
