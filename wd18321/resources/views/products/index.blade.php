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
        <a href="{{ route('product.addProduct') }}" class="btn btn-primary">Thêm</a>
        <form action="{{ route('product.index') }}" method="GET">
            @csrf
           <div class="text-center">
            <input type="text" class="border border-primary rounded-start" id="name" name="key" placeholder="Tìm kiếm...">
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
                        <td>{{ $product->price }}</td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
