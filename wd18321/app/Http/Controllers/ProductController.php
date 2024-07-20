<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request){
        if(isset($request->key) && ($request->key) != ""){
            $check = true;
            $key = $request->key;
            $title = 'Tìm kiếm: '.$key;
            $listProduct = DB::table('product')
            ->join('category', 'product.category_id', '=', 'category.id')
            ->select('product.id', 'product.name', 'product.price', 'product.view', 'category.name as ct_name')
            ->where('product.name','like', '%' . $key .'%')
            ->orWhere('category.name','like', '%' . $key .'%')
            ->orderBy('view', 'desc')
            ->get();
            return view('admins.products.index', compact('title', 'listProduct', 'check'));
        }else{
            $check = false;
            $title = 'Danh sách sản phẩm';
            $listProduct = DB::table('product')
            ->join('category', 'product.category_id', '=', 'category.id')
            ->select('product.id', 'product.name', 'product.price', 'product.view', 'category.name as ct_name')
            ->orderBy('view', 'desc')
            ->get();
            return view('admins.products.index', compact('title', 'listProduct', 'check'));
        }
        
    }

    public function addProduct(){
        $title = 'Thêm mới sản phẩm';
        $category = DB::table('category')->get();
        return view('admins.products.add', compact('title', 'category'));
    }

     public function addPostProduct(Request $request){
       $data = [
        'name' => $request->name,
        'category_id' => $request->category_id,
        'price' => $request->price,
        'view' => $request->view,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
       ];
       DB::table('product')->insert($data);
       return redirect()->route('product.list-product');
    }

    public function delProduct($id){
        DB::table('product')->where('id', $id)->delete();
       return redirect()->route('product.list-product');
    }

    public function detailProduct($id)
    {
        $title = 'Update Product';
        $category = DB::table('category')->get();
        $product = DB::table('product')->where('id', $id)->first();
        return view('admins.products.update', compact('title', 'category', 'product'));
    }

    public function updatePostProduct(Request $request, $id){
        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'view' => $request->view,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        DB::table("product")->where('id', $id)->update($data);
        return redirect()->route('product.list-product');
    }
}
