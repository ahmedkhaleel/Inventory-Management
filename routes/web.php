<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::controller(AdminController::class)->group(function () {
    Route::post('/admin/login', 'login')->name('admin.login');
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile.view');
    Route::get('/admin/profile/edit', 'EditProfile')->name('admin.profile.edit');
    Route::post('/admin/profile/update', 'UpdateProfile')->name('admin.profile.update');
    Route::get('/admin/profile/change_password', 'ChangePassword')->name('admin.profile.change.password');
    Route::post('/admin/profile/update_password', 'UpdatePassword')->name('admin.profile.update.password');
});
require __DIR__.'/auth.php';
