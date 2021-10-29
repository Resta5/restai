<html>
<head>
    <title>Data</title>
</head>

<body>
    <center>
        <h1>Menampilkan Data Absen</h1>
    </center>
    <ul>
        @foreach($data as $data2)
        Nis :{{$data2['nis']}}<br>
        Nama :{{$data2['nama']}}<br>
        Jenis Kelamin:{{$data2['jeniskelamin']}}<br>
        Kelas :{{$data2['kelas']}}<br>
        alamat :{{$data2['alamat']}}<br>
        <hr>
        @endforeach
    </ul>
</body>
</html>
