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
     <h1>Ini Halaman Mahasiswa</h1>

        <a href =" {{ route ('mahasiswa.pendaftaran') }}"> Pendaftaran </a>
        <br>
        <a href =" {{ route ('mahasiswa.nilai') }}"> Nilai </a>
        <br>
        <a href =" {{ route ('mahasiswa.ujian') }}"> Ujian </a>


</body>
</html>
