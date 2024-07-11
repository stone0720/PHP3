<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admins\SanPhamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KhachHangController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// WD18320 học ké
Route::get('/list-khach-hang', [KhachHangController::class, 'listKhachHang']);
Route::get('add-khach-hang', [KhachHangController::class, 'addKhachHang']);
Route::post('addPost', [KhachHangController::class, 'addPost']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);

// Route resource
// Route resource cần phải đặt dưới các route viết thêm thì mới chạy đc các route viết thêm
Route::get('/san-pham/test', [SanPhamController::class, 'test'])->name('sanpham.test');
Route::resource('san-pham', SanPhamController::class);
