<?php

use App\Http\Controllers\CultureController;
use App\Http\Controllers\UserController;
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
Auth::routes();

Route::get('search', [CultureController::class, 'search'])->name('search');

Route::get('changeStatus', [CultureController::class, 'changeCultureStatus'])->name('changeStatus');

Route::resource('cultures', CultureController::class);

Route::resource('users', UserController::class);














