@extends('layouts.main')
<h1>Tambah Siswa</h1>

<form action="/student" method="POST">
    @csrf

    <label>Nama:</label>
    <input type="text", name="nama"><br><br>

    <label>Kelas:</label>
    <input type="text", name="kelas"><br><br>

    <label>NISN:</label>
    <input type="text", name="nisn"><br><br>

    <label>Alamat:</label>
    <textarea name="alamat"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>