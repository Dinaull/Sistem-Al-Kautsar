<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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


Route::get('/',[PageController::class,'login'])->name('login');
Route::get('/login',[PageController::class,'login'])->name('login.form');
Route::post('/login',[PageController::class,'logindata'])->name('login.data');
Route::get('/dashboard',[PageController::class,'dashboard'])->name('dashboard');
Route::resource('pengelolaan', SiswaController::class);
Route::get('/pengelolaan/search', [SiswaController::class, 'search']);
Route::get('/profile',[PageController::class,'profile'])->name('profile');
