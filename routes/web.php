<?php

use App\Http\Controllers\FrontendController;
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

/*
|--------------------------------------------------------------------------
| Web Frontend
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/home', [FrontendController::class, 'home'])->name('home');
Route::get('/map_aset', [FrontendController::class, 'map_aset'])->name('map_aset');