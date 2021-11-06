<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Barang</title>
</head>
<body>
<tr>
        <h1>Menampilkan Data barang</h1>
        <table border="1">
        <th>Id</th>
        <th>Nama</th>
        <th>Varian</th>
        <th>Harga beli</th>
        <th>Harga Jual</th>
</tr>

@foreach($barang as $data)
<tr>
        <td>{{$data['id_barang']}}</td>
        <td>{{$data['nama']}}</td>
        <td>{{$data['varian']}}</td>
        <td>{{$data['harga_beli']}}</td>
        <td>{{$data['harga_jual']}}</td>
</tr>
@endforeach
</table>

</body>
</html>
