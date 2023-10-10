<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::redirect('/', '/card');
Route::any('/card', [Controllers\CardsController::class, 'index'])->name('card');
Route::any('/table', [Controllers\TableController::class, 'index'])->name('table');
Route::any('/spider', [Controllers\SpiderController::class, 'index'])->name('spider');

Route::any('/submit', [Controllers\OutputController::class, 'submit'])->name('submit');
