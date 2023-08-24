<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MasterKabupatenKotaController;
use App\Http\Controllers\Backend\PermissionsController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\UserProfileController;
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
    Route::group(['prefix' => 'auth'], function () {
        Route::post('/first_login', [AuthController::class, 'first_login'])->name('first_login');
        Route::post('/second_login', [AuthController::class, 'second_login'])->name('second_login');
    });
});
// Auth Login
Route::group(['prefix' => 'auth'], function () {
    Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
    Route::get('/logout', [AuthController::class, 'logout_sessions'])->name('logout_sessions');
});

// Backend Group
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Auth Logout
    Route::group(['prefix' => 'auth'], function () {
        Route::get('/logout', [AuthController::class, 'logout_sessions'])->name('logout_sessions');
    });
    // App Admin
    Route::group(['prefix' => 'app_admin'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('backend_index');
        // Route::get('/manage_kabupatenkota', [MasterKabupatenKotaController::class, 'index'])->name('manage_kabupatenkota');
        //If Single Role for Super Admin
        Route::group(['middleware' => 'role:super-admin'], function() {
            Route::get('/manage_roles', [RolesController::class, 'index'])->name('manage_roles');
            Route::get('/manage_permissions', [PermissionsController::class, 'index'])->name('manage_permissions');
        });
        //If Single Role for Admin PIC
        Route::group(['middleware' => 'role:admin-pic'], function() {

        });
        //If Common Role for Super Admin && Admin PIC
        Route::group(['middleware' => ['role:super-admin', 'role:admin-pic']], function() {
            // Route::get('/manage_siteinfo', [SiteInfoController::class, 'index'])->name('manage_siteinfo');
            // Route::get('/manage_bannerslides', [BannerSlidesController::class, 'index'])->name('manage_bannerslides');
            // Route::get('/manage_users', [UsersController::class, 'index'])->name('manage_users');
            // Route::get('/users_activity', [UsersActivityController::class, 'index'])->name('users_activity');
            // Route::get('/{username}', [UserProfileController::class,'index'])->name('user_profile');
            //Api Ajax App Auth
            Route::group(['prefix' => 'api'], function () {
                // Route::get('/user_info', [CommonController::class, 'user_info'])->name('user_info');
            });
        });
    });

    //Api Ajax App Auth
    Route::group(['prefix' => 'api'], function () {
        Route::get('/user_info', [CommonController::class, 'user_info'])->name('user_info');
    });
});