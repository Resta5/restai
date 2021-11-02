<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Barang</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data Pembeli</h1>
    </center>
    <ul>
        @foreach($pembeli as $data)
        Id Pembeli :{{$data['id_pembeli']}}<br>
        Nama :{{$data['nama']}}<br>
        Jenis Kelamin :{{$data['jk']}}<br>
        Alamat :{{$data['alamat']}}<br>
        Kode Pos :{{$data['kode_pos']}}<br>
        Kota :{{$data['kota']}}<br>
        Tanggal Lahir :{{$data['tgl_lahir']}}<br>
        <hr>
        @endforeach
    </ul>



</body>
</html>

