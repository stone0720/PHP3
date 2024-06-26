<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KhanhController extends Controller
{
    function showKhanh() {
        $khanh = [
            'Name' => 'Phạm Quốc Khanh',
            'Age' => '18',
            'Home' => 'Quảng Ninh',
            'Hob' => 'Bóng đá'
        ];
        return view('khanh')->with([
            'name' => $khanh
        ]);
    }
}
