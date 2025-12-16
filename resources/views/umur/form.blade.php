<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Umur</title>
</head>

<body>
    <h1>Selamat Datang di aplikasi ini, Silakan masukan umur kamu</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red"> {{ $error }} </p>
        @endforeach
    @endif

    @if (session('fail'))
        <p style="color: red"> {{ session('fail') }} </p>
    @endif


    <form action="{{ route('umur.proses') }}" method="post">

        @csrf
        {{-- input untuk nama --}}
        <div class="">
            <label for="">Nama Kamu</label>
            <input type="text" name="name" required>
        </div>

        <div class="">
            <label for="">Umur</label>
            <input type="number" name="age" required>
        </div>

        <button type="submit">Masuk</button>

    </form>

</body>

</html>
