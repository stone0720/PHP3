<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $title = 'Trang chủ';
        return view('admins.index', compact('title'));
    }
}
