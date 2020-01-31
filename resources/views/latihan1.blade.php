<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Costumer</center>
    @foreach ($costumer as $data)
    Nama Costumer : {{$data->code_costumer}}<br>
    Nama Costumer : {{$data->name}}<br>
    Nama Costumer : {{$data->email}}<br>
    Nama Costumer : {{$data->county}}<br>
    Nama Costumer : {{$data->nama_barang}}<br>
    <hr>
    @endforeach
</body>
</html>
