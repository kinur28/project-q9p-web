<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'home']);
Route::get('/About-us', [DashboardController::class, 'about'])->name('about-us');
Route::get('/Galery', [DashboardController::class, 'galery'])->name('galery');
Route::get('instagram-get-auth', 'InstgramAuthController@show')->middleware('auth');
