<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhachHangController extends Controller
{
    public function listKhachHang(){
        $title = 'Danh sách khách hàng';
        $khachHangs = DB::table('khach_hangs')->get();
        return view('khach_hangs.list', compact('title', 'khachHangs'));
    }

    public function addKhachHang(){
        $title = 'Thêm mới khách hàng';
        return view('khach_hangs.add', compact('title'));
    }

    public function addPost(){
        if(isset($_POST['add']) && ($_POST['add']) != ""){
            $ten_khach_hang = $_POST['ten_khach_hang'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $que_quan = $_POST['que_quan'];
            DB::table("khach_hangs")->insert([
                 'ten_khach_hang' => $ten_khach_hang,
                 'sdt' => $sdt,
                 'email' => $email,
                 'que_quan' => $que_quan,
            ]);
            header('Location: /list-khach-hang');
            exit();
        }
        
    }
}
