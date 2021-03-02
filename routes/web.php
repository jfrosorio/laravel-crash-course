<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about-us');
Route::get('events', [PageController::class, 'events'])->name('events');
Route::get('contacts', [PageController::class, 'contacts'])->name('contacts');

Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');
