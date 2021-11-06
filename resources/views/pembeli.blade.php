<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Pembeli</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data Pembeli</h1>
    </center>

    <tr>
        <table border="1">
            <th>Id Pembeli</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>kode pos</th>
            <th>Kota</th>
            <th>Tanggal Lahir</th>
    </tr>

        @foreach($pembeli as $data)
        <tr>
        <td>{{$data['id_pembeli']}}</td>
        <td>{{$data['nama']}}</td>
        <td>{{$data['jk']}}</td>
        <td>{{$data['alamat']}}</td>
        <td>{{$data['kode_pos']}}</td>
        <td>{{$data['kota']}}</td>
        <td>{{$data['tgl_lahir']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

