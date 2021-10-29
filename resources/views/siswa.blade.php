<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($siswas as $data2)
    Id    :{{$data2['id']}}<br>
    Nama :{{$data2['nama']}}<br>
    Username :{{$data2['username']}}<br>
    Email    :{{$data2['email']}}<br>
    Alamat    :{{$data2['alamat']}}<br>
    Mata Pelajaran :
    <ul>
        @foreach ( $data2['mapel'] as $item)

        <li>{{ $item }}</li>

        @endforeach
    </ul>
    @endforeach

</body>
</html>
