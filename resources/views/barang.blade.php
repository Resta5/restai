<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Barang</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data barang</h1>
    </center>
    <ul>
        @foreach($barang as $data)
        Id :{{$data['id_barang']}}<br>
        Nama :{{$data['nama']}}<br>
        Varian :{{$data['varian']}}<br>
        Harga beli :{{$data['harga_beli']}}<br>
        Harga Jual :{{$data['harga_jual']}}<br>

        <hr>
        @endforeach
    </ul>



</body>
</html>
