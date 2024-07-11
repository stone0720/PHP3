<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        th, td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5 p-4 bg-white shadow-sm rounded">
        <a href="/add-khach-hang" class="btn btn-primary">Thêm mới</a>
        <h1 class="text-center mb-4">{{ $title }}</h1>
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">SĐT</th>
                    <th scope="col">Email</th>
                    <th scope="col">Quê quán</th>
                    <th scope="col">Action</th>
 
                </tr>
            </thead>
            <tbody>
                @foreach ($khachHangs as $index => $khachHang)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $khachHang->ten_khach_hang}}</td>
                        <td>{{ $khachHang->sdt}}</td>
                        <td>{{ $khachHang->email}}</td>
                        <td>{{ $khachHang->que_quan}}</td>

                        <td>
                            <a href="" class="btn btn-warning">Sửa</a>
                            <a href="" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>