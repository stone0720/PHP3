<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [];
        $data['title'] = 'Trang chủ';
        $data['content'] = 'Đây là trang chủ';
        $data['text'] = '<u> Lớp WD18320 </u>';
        $data['arrs'] = [
            'Item 1' => 'Khanh',
            'Item 2' => 'Khang',
            'Item 3' => 'Khánh'
        ];
       return view('clients.index', $data);
    }
}
