<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Hello word</h1><hr>
    <p>Hôm nay là ngày <?= //date('d/m/Y') ?></p> --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phong ban</th>
                <th>So ngay nghi</th>
                <th>Tuoi</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id}}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->phongban_id}}</td>
                <td>{{ $user->songaynghi}}</td>
                <td>{{ $user->tuoi}}</td>
            </tr>
        @endforeach
            {{-- <?php //foreach($abc as $a):?>
                <tr>
                    <td><?=//$a['id']?></td>
                    <td><?=//$a['name']?></td>
                </tr>
            <?php //endforeach;?> --}}
        </tbody>
    </table>
    <?php 
    // echo '<pre>';
    // print_r($users);
    // echo '</pre>';
    ?>
</body>
</html>