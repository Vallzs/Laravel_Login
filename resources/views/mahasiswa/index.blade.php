@include('layouts.template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
</head>
<body>
    <center>  <h1>{{$jd}}</h1>

        <a href = {{ Route ('mahasiswa.pendaftaran') }}> Pendaftaran </a>
        <br>
        <a href = {{ Route ('mahasiswa.nilai') }}> Nilai </a>
        <br>
        <a href = {{ Route ('mahasiswa.ujian') }}> Ujian </a>


    </center>
</body>
</html>
