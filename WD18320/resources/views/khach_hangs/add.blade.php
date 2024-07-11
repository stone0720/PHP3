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
        <h1 class="text-center mb-4">{{ $title }}</h1>
        <form action="/addPost" method="POST">
            {{-- @csrf: dùng để xác minh form này không phải từ nơi khác, tránh bị tấn công --}}
            @csrf
            <div class="mb-3">
                <label for="ten_khach_hang" class="form-label">Họ và tên:</label>
                <input type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang">
            </div>
            <div class="mb-3">
                <label for="sdt" class="form-label">SĐT:</label>
                <input type="text" class="form-control" id="sdt" name="sdt">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="que_quan" class="form-label">Quê quán:</label>
                <input type="text" class="form-control" id="que_quan" name="que_quan">
            </div>
            <input type="submit" class="form-control btn btn-primary" name="add" id="" value="Thêm mới">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
