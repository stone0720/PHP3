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

    <a href="" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">Thêm mới</span>
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            @if (count($listSanPhams) > 0)
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Ngày nhập</th>
                        <th>Mô tả</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Ngày nhập</th>
                        <th>Mô tả</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($listSanPhams as $index => $listSanPham)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $listSanPham->ma_san_pham }}</td>
                        <td>{{ $listSanPham->ten_san_pham }}</td>
                        <td>{{ $listSanPham->gia }}</td>
                        <td>{{ $listSanPham->so_luong }}</td>
                        <td>{{ $listSanPham->ngay_nhap }}</td>
                        <td>{{ $listSanPham->mota }}</td>
                        <td>{{ $listSanPham->trang_thai }}</td>

                        <td>
                            <a href="" class="btn btn-warning btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                                <span class="text">Sửa</span>
                            </a>

                            <a href="" class="btn btn-danger btn-icon-split"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa không?!??')">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Xóa</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="d-flex justify-content-center align-items-center">
                <p>Không có diễn viên nào được tìm thấy.</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
    </script>
@endsection
