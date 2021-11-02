<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Barang</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data Suplier</h1>
    </center>
    <ul>
        @foreach($suplier as $data)
        Id Suplier :{{$data['id_suplier']}}<br>
        Nama :{{$data['nama']}}<br>
        Alamat :{{$data['alamat']}}<br>
        Kode Pos :{{$data['kode_pos']}}<br>
        Kota :{{$data['Kota']}}<br>

        <hr>
        @endforeach
    </ul>



</body>
</html>

