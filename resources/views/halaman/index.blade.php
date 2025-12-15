<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini adalah halaman Index.</h1>
    <h2>Saldo Awal : {{ $saldo_awal }}</h2>
    <p>Kebutuhan bulan ini : {{ $kebutuhan }}</p>
    <h2>Saldo saya saat ini : {{ $total }}</h2>

    <a href="{{ route('about.halaman') }}">about me</a>


</body>
</html>