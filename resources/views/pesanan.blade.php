<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Pesanan</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data Pemesanan</h1>
    </center>

            <tr>
                <table border="1">
                    <th>Id Pesanan</th>
                    <th>Nama Pelanggan</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Tanggal Pesan</th>
            </tr>

            @foreach($pesanan as $data)
            <tr>
                <td>{{$data['id_pesanan']}}</td>
                <td>{{$data['nama_pelanggan']}}</td>
                <td>{{$data['nama_barang']}}</td>
                <td>{{$data['qty']}}</td>
                <td>{{$data['tgl_pesan']}}</td>
            </tr>
            @endforeach
            </table>

</body>
</html>

