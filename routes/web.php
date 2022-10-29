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

Route::get('/', [CultureController::class, 'index']);

Route::get('statusChanges', [CultureController::class, 'statusChanges'])->name('statusChanges');
Route::get('search', [CultureController::class, 'search'])->name('search');


Route::resource('users', UserController::class);
Route::resource('cultures', CultureController::class);













