<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    function index(){
        return view('index');
        // echo "Đây là trang chủ";
        // http://127.0.0.1:8000/
    }

    function lienHe(){
        return view('lien-he');
        // echo "Đây là trang liên hệ";
        // http://127.0.0.1:8000/lien-he
    }

    function lay1Tin($id){
        $data = ['id' => $id];
        return view('chi-tiet', $data);
    }
}
