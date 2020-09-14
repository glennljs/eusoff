<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BidController;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard')->with(['user' => Auth::user()]);
})->name('dashboard');

Route::get('/hello', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/public_profile/{id}', [HomeController::class, 'public_profile']);
Route::get('/sports', [HomeController::class, 'sports']);
Route::get('/sport/{id}', [HomeController::class, 'sport']);
Route::get('/numbers', [HomeController::class, 'numbers']);
Route::get('/number/{id}', [HomeController::class, 'number']);
Route::get('/bidding', [HomeController::class, 'bidding']);