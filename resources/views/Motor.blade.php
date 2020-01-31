<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar motor Indo</center>
    @foreach ($motor as $data)
    Nama Motor : {{$data->jenis_motor}}<br>
    Nama motor : {{$data->nama_motor}}<br>
    Nama motor : {{$data->tipe_motor}}<br>
    Nama motor : {{$data->warna_motor}}<br>
    Nama motor : {{$data->no_mesin}}<br>
    Nama motor : {{$data->tahun_dibuat}}<br>
    Nama motor : {{$data->tempat_dibuat}}
    <hr>
    @endforeach
</body>
</html>
