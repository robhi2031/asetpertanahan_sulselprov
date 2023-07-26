<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\PermissionsController;
use App\Http\Controllers\CommonController;
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

//Api Ajax Common Public
Route::group(['prefix' => 'api'], function () {
    Route::get('/site_info', [CommonController::class, 'site_info'])->name('site_info');
});
// Auth Login
Route::group(['prefix' => 'auth'], function () {
    Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
    Route::get('/logout', [AuthController::class, 'logout_sessions'])->name('logout_sessions');
});

Route::group(['middleware' => 'role:super-admin'], function() {
    Route::get('/manage_permissions', [PermissionsController::class, 'index'])->name('manage_permissions');
    // Route::get('/user', function() {
    //     return 'Welcome...!!';
    // });
});