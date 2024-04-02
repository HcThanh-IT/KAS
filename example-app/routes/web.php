<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\AuthController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\CashController;


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

// Đăng nhập
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Đăng xuất
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Trang chủ
Route::get('/home', [HomeController::class, 'showHome'])->name('home');
// Route::get('/home', function () {
//     return view('pages/home');
// })->middleware('auth'); // Chỉ cho phép người dùng đã đăng nhập truy cập

Route::get('/cash/cashin', [CashController::class, 'showCashIn'])->name('cashin');
