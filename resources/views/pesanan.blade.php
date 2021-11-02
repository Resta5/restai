<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Barang</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data Pemesanan</h1>
    </center>
    <ul>
        @foreach($pesanan as $data)
        Id Pesanan :{{$data['id_pesanan']}}<br>
        Nama pelanggan :{{$data['nama_pelanggan']}}<br>
        Nama Barang :{{$data['nama_barang']}}<br>
        Jumlah :{{$data['qty']}}<br>
        Tanggal pesan :{{$data['tgl_pesan']}}<br>

        <hr>
        @endforeach
    </ul>



</body>
</html>

