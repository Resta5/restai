<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Barang</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data Pembelian</h1>
    </center>
    <ul>
        @foreach($pembelian as $data)
        Id Pembelian :{{$data['id_pembelian']}}<br>
        Nama Barang :{{$data['nama_barang']}}<br>
        Nama suplier :{{$data['nama_suplier']}}<br>
        Quantity :{{$data['qty']}}<br>
        Tanggal :{{$data['tgl']}}<br>

        <hr>
        @endforeach
    </ul>



</body>
</html>
