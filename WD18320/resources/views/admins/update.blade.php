@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('css')
    <style>
    </style>
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <div>
            <h1 class="h3 text-gray-800">Danh sách sản phẩm</h1>
            <p class="mb-4">
                Sản phẩm
                <a target="_blank" href="https://datatables.net">Admin</a>.
            </p>
        </div>
    </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('san-pham.update', $listSanPham->id)}}" method="POST" class="m-3" enctype="multipart/form-data">
                    {{-- Làm việc với form trong Laravel --}}
                    {{-- 
                        CSRF Field: là một trường bắt buộc phải có trong form khi sử dụng Laravel
                    --}}
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="img_san_pham">Hình ảnh:</label>
                        <input type="file" class="form-control-file" id="img_san_pham" name="img_san_pham" onchange="showImage(event)">
                        <br>
                        <div class="text-center">
                            <img id="img_product" src="{{ Storage::url($listSanPham->hinh_anh) }}" alt="Hình ảnh sản phẩm" style="width:150px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ten_san_pham">Tên sản phẩm:</label>
                        <input type="text" class="form-control  @error('ten_san_pham') is-invalid @enderror" id="ten_san_pham" name="ten_san_pham" value="{{ $listSanPham->ten_san_pham }}">
                        @error('ten_san_pham')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="ma_san_pham">Mã sản phẩm:</label>
                        <input type="text" class="form-control  @error('ma_san_pham') is-invalid @enderror" id="ma_san_pham" name="ma_san_pham" value="{{ $listSanPham->ma_san_pham }}">
                        @error('ma_san_pham')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="gia">Giá sản phẩm:</label>
                        <input type="text" class="form-control  @error('gia') is-invalid @enderror" id="gia" name="gia" value="{{ $listSanPham->gia }}">
                        @error('gia')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="so_luong">Số lượng:</label>
                        <input type="number" class="form-control  @error('so_luong') is-invalid @enderror" id="so_luong" name="so_luong" value="{{ $listSanPham->so_luong }}">
                        @error('so_luong')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="ngay_nhap">Ngày nhập:</label>
                        <input type="date" class="form-control  @error('ngay_nhap') is-invalid @enderror" id="ngay_nhap" name="ngay_nhap" value="{{ $listSanPham->ngay_nhap }}">
                        @error('ngay_nhap')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="mota">Mô tả:</label>
                        <textarea class="form-control" name="mota" id="" cols="30" rows="3">{{ $listSanPham->mota }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="trang_thai">Trạng thái:</label>
                        <select name="trang_thai" id="trang_thai" class="form-select form-control  @error('trang_thai') is-invalid @enderror">
                            <option value="" selected>-- Chọn trạng thái --</option>
                            <option {{ ($listSanPham->trang_thai == 0 ) ? 'selected' : ""}} value="0">Ẩn</option>
                            <option {{ ($listSanPham->trang_thai == 1 ) ? 'selected' : ""}} value="1">Hiển thị</option>
                        </select>
                        @error('trang_thai')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>


                    <br>
                    <input class="btn btn-outline-success mr-2" type="submit" name="add" value="Sửa">

                    <a href="{{ route('san-pham.index') }}"><button type="button" class="btn btn-info">Danh
                            sách</button></a>
                </form>
            </div>
        </div>
    @endsection

    @section('js')
        <script>
            function showImage(event){
                const image_product = document.getElementById('img_product');
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onload = function() {
                    image_product.src = reader.result;
                }

                if(file){
                    reader.readAsDataURL(file);
                }
            }
        </script>
    @endsection
