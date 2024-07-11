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
        <form action="{{ route('product.addPostProduct') }}" method="POST">
            {{-- @csrf: dùng để xác minh form này không phải từ nơi khác, tránh bị tấn công --}}
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Tên danh mục:</label>
                <select class="form-select" name="category_id" aria-label="Default select example">
                    <option selected>-- Vui lòng chọn tên danh mục --</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá sản phẩm:</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            
            <div class="mb-3">
                <label for="view" class="form-label">View:</label>
                <input type="text" class="form-control" id="view" name="view">
            </div>
            <input type="submit" class="form-control btn btn-primary" name="add" id="" value="Thêm mới"><br><br>
            <a href="http://127.0.0.1:8000/product/list-product" class="form-control btn btn btn-success">Danh sách</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
