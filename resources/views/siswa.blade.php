<html>
<head>
    <title>Data</title>
</head>

<body>
    <center>
        <h1>Menampilkan Data Siswa</h1>
    </center>
    <ul>
        <table>
            @foreach($siswas as $siswas2)
            Id :{{$siswas2['id']}}<br>
            Nama :{{$siswas2['nama']}}<br>
            Username:{{$siswas2['username']}}<br>
            Email :{{$siswas2['email']}}<br>
            Alamat :{{$siswas2['alamat']}}<br>
            Mata Pelajaran :
            @foreach($siswas2 ['mapel'] as $siswas3)
            <ul>
            <li>{{$siswas3}}</li>
    </ul>
            @endforeach
            <hr>
            @endforeach
        </table>
    </ul>
</body>
</html>

