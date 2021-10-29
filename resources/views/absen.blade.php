<html>
<head>
    <title>Data</title>
</head>

<body>
    <center>
        <h1>Menampilkan Data Absen</h1>
    </center>
    <ul>
    <table>
        @foreach($data as $data2)
        Nis :{{$data2['nis']}}<br>
        Nama :{{$data2['nama']}}<br>
        Jenis Kelamin:{{$data2['jeniskelamin']}}<br>
        Kelas :{{$data2['kelas']}}<br>
        Alamat :{{$data2['alamat']}}<br>
        <hr>
        @endforeach
    </table>
    </ul>
</body>
</html>
