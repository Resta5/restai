<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Suplier</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data Suplier</h1>
    </center>

        <tr>
            <table border="1">
                <th>Id Suplier</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>kode pos</th>
                <th>Kota</th>
        </tr>

        @foreach($suplier as $data)
        <tr>
            <td>{{$data['id_suplier']}}</td>
            <td>{{$data['nama']}}</td>
            <td>{{$data['alamat']}}</td>
            <td>{{$data['kode_pos']}}</td>
            <td>{{$data['kota']}}</td>
        </tr>
        @endforeach
        </table>
</body>
</html>

