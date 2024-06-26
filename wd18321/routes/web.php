<?php

use App\Http\Controllers\KhanhController;
use App\Http\Controllers\TinController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// GET POST =>> Method HTTP
// http://127.0.0.1:8000/ =>> Base url
Route::get('/', function(){
    echo 'Trang chủ';
});
Route::get('/test', function(){
    echo '123';
});

Route::get('/list-user', [UserController::class, 'showUser']);

// Slug: là một thành phần của đường dẫn
// http://127.0.0.1:8000/get-user/1
Route::get('/get-user/{id}/{name?}', [UserController::class, 'getUser']);

// Params: là id của ng dùng gửi lên
// http://127.0.0.1:8000/edit-user?id=1&name=khanh
Route::get('/edit-user', [UserController::class, 'editUser']);

// Lab 1:
// Bài 1
Route::get('/', [TinController::class, 'index']);
Route::get('/lien-he', [TinController::class, 'lienHe']);

// Bài 2
Route::get('/ct/{id}', [TinController::class, 'lay1Tin']);
// http://localhost:8000/ct/21
// http://localhost:8000/ct/5

// Bài 3
Route::get('/thong-tin-SV', [KhanhController::class, 'showKhanh']);
