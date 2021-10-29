<html>
<head>
    <title>Data</title>
</head>

<body>
    <center>
        <h1>Menampilkan Data Absen</h1>
    </center>
    <table border="1"  width=100%>
        <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
    <ul>
        @foreach($data as $data2)
        <tr>
             <td>{{$data2['nis']}}</td>
             <td>{{$data2['nama']}}</td>
             <td>{{$data2['jeniskelamin']}}</td>
             <td>{{$data2['kelas']}}</td>
             <td>{{$data2['alamat']}}</td>
        </tr>

        {{--
        Nis :{{$data2['nis']}}<br>
        Nama :{{$data2['nama']}}<br>
        Jenis Kelamin:{{$data2['jeniskelamin']}}<br>
        Kelas :{{$data2['kelas']}}<br>
        alamat :{{$data2['alamat']}}<br> --}}
        @endforeach
    </table>
    </ul>
</body>
</html>
