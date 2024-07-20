@extends('admins.layouts.default')

@section('title')
    {{ $title }}
@endsection

@section('css')
   
@endsection

@section('content')
    <div class="p-4" style="min-height: 800px;">
        @if ($check)
            <a href="{{ route('product.index') }}" class="btn btn-success">Danh sách</a>
        @endif
        <a href="{{ route('product.addProduct') }}" class="btn btn-primary">Thêm</a>
        <form action="{{ route('product.index') }}" method="GET">
            @csrf
            <div class="text-center">
                <input type="text" class="border border-primary rounded-start" id="name" name="key"
                    placeholder="Tìm kiếm...">
                <input type="submit" class="btn btn-primary" name="search" id="" value="Tìm kiếm">
            </div>
        </form>
        <h1 class="text-center mb-4">{{ $title }}</h1>
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">Lượt xem</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listProduct as $index => $product)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $product->ct_name }}</td>
                        <td>{{ $product->name }}</td>
                        {{-- <td>{{ $product->price }}</td> --}}
                        <td>{{ $product->view }}</td>

                        <td>
                            <a href="{{ route('product.detailProduct', $product->id) }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ route('product.delProduct', $product->id) }}"
                                onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('js')
    
@endsection
