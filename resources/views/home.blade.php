{{-- @extends('layouts.main') -> halaman ini "menumpang" layout utama layouts/main.blade.php --}}
@extends('layouts.main')

{{-- @section('title', 'Halaman Home') -> ini akan dimasukkan ke tempat @yield('title') di layout --}}
@section('title', 'Halaman Home')

{{-- @section('content') ... @endsection -> bagian ini akan dimasukkan ke @yield('content') --}}
@section('content')
    <h1>Selamat Datang di Home Page</h1>
    <p>Ini adalah isi konten halaman home.</p>
@endsection