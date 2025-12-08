{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>ini halaman HOME</h1>
    <h2>Daftar Produk</h2>
    <ul>
        @foreach ($data as $d)
            <li>{{ $d }}</li>           
        @endforeach
    </ul>
</body>
</html> --}}

{{-- @extends('layouts.main') -> halaman ini "menumpang" layout utama layouts/main.blade.php --}}
@extends('layouts.main')

{{-- @section('title', 'Halaman Home') -> ini akan dimasukkan ke tempat @yield('title') di layout --}}
@section('title', 'Halaman About')

{{-- @section('content') ... @endsection -> bagian ini akan dimasukkan ke @yield('content') --}}
@section('content')
    <h1>Selamat Datang di about page</h1>
    <p>Ini adalah isi konten halaman about.</p>
@endsection

