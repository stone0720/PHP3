<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        th,
        td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5 p-4 bg-white shadow-sm rounded">
        <a href="{{ route('users.addUsers') }}" class="btn btn-primary">Thêm</a>
        <h1 class="text-center mb-4">{{ $title }}</h1>
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên người dùng</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phòng ban</th>
                    <th scope="col">Số ngày nghỉ</th>
                    <th scope="col">Tuổi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listUsers as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->ten_donvi }}</td>
                        <td>{{ $user->songaynghi }}</td>
                        <td>{{ $user->tuoi }}</td>

                        <td>
                            <a href="{{ route('users.detailUsers', $user->id) }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ route('users.delUsers', $user->id) }}" 
                                onclick="return confirm('Bạn có chắc chắn xóa không?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
