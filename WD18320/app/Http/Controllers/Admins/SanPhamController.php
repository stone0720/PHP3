<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    // Sử dụng cho 2 cách Raw Query và Query Builer
    // protected $sanPhams;

    // public function __construct(){
    //     $this->sanPhams = New SanPham();
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Sử dụng cho 2 cách Raw Query và Query Builer
        // $listSanPhams = $this->sanPhams->getList();

        $title = 'Danh sách sản phẩm';

        // Sử dụng Eloquent
        $listSanPhams = SanPham::orderByDesc('id')->get();
        return view('admins.index', compact('title', 'listSanPhams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd("Đây là create resource");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // Viết một phương thức mới
    public function test()
    {
        dd("Đây là một hàm mới");
    }
}
