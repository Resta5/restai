<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Menampilkan Data Post</h1>
        </center>
        <ul>
        @foreach($query as $data2)
        Id :{{$data2['id']}}<br>
        Title :{{$data2['title']}}<br>
        Content :{{$data2['content']}}<br>
        <hr>
        @endforeach
    </ul>



</body>
</html>
