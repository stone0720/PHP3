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
        <form action="{{ route('users.updatePostUsers', $users->id) }}" method="POST">
            {{-- @csrf: dùng để xác minh form này không phải từ nơi khác, tránh bị tấn công --}}
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Họ và tên:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Tên phòng ban:</label>
                <select class="form-select" name="phongban_id" aria-label="Default select example">
                    <option selected>-- Vui lòng chọn tên phòng ban --</option>
                    @foreach ($phongban as $item)
                        <option 
                            {{ ($users->phongban_id == $item->id) ? 'selected' : ""}}
                         value="{{ $item->id }}">{{ $item->ten_donvi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Số ngày nghỉ:</label>
                <input type="text" class="form-control" id="name" name="songaynghi" value="{{ $users->songaynghi }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Tuổi:</label>
                <input type="text" class="form-control" id="name" name="tuoi" value="{{ $users->tuoi }}">
            </div>
            <input type="submit" class="form-control btn btn-primary" name="update" id="" value="Sửa">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
