<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>IPK</th>
        </tr>
        @foreach($data as $dd)
            <tr>
                <td>{{ $dd['id'] }}</td>
                <td>{{ $dd['nama_mahasiswa'] }}</td>
                <td>{{ $dd['ipk'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>