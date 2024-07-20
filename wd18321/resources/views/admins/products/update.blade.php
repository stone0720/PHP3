@extends('admins.layouts.default')

@section('title')
    {{ $title }}
@endsection

@section('css')
   
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        <h1 class="text-center mb-4">{{ $title }}</h1>
        <form action="{{ route('product.updatePostProduct', $product->id) }}" method="POST">
            {{-- @csrf: dùng để xác minh form này không phải từ nơi khác, tránh bị tấn công --}}
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Tên danh mục:</label>
                <select class="form-select" name="category_id" aria-label="Default select example">
                    <option selected>-- Vui lòng chọn tên danh mục --</option>
                    @foreach ($category as $item)
                        <option 
                            {{ ($product->category_id == $item->id) ? 'selected' : ""}}
                         value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
            </div>
            <div class="mb-3">
                <label for="view" class="form-label">View:</label>
                <input type="text" class="form-control" id="view" name="view" value="{{ $product->view }}">
            </div>
            <input type="submit" class="form-control btn btn-primary" name="update" id="" value="Sửa"><br><br>
            <a href="http://127.0.0.1:8000/product/list-product" class="form-control btn btn btn-success">Danh sách</a>
        </form>
    </div>
@endsection

@section('js')
    
@endsection
