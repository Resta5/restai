<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Pembelian</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data Pembelian</h1>
    </center>
        <tr>
            <table border="1">
                <th>Id Pembelian</th>
                <th>Nama Barang</th>
                <th>Nama Suplier</th>
                <th>Quantity</th>
                <th>Tanggal</th>
        </tr>

        @foreach($pembelian as $data)
        <tr>
        <td>{{$data['id_pembelian']}}</td>
        <td>{{$data['nama_barang']}}</td>
        <td>{{$data['nama_suplier']}}</td>
        <td>{{$data['qty']}}</td>
        <td>{{$data['tgl']}}</td>
</tr>
        @endforeach
</table>
</body>
</html>

