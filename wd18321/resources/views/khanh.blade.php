<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giới thiệu bản thân</title>
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
        <h1 class="text-center mb-4">Thông tin giới thiệu bản thân</h1>
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Tuổi</th>
                    <th scope="col">Quê quán</th>
                    <th scope="col">Sở thích</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$name['Name']}}</td>
                    <td>{{$name['Age']}}</td>
                    <td>{{$name['Home']}}</td>
                    <td>{{$name['Hob']}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
