@extends('layouts.main')

<h1>Data Siswa</h1>
<a href="/student/create">Tambah Siswa</a>
<br><br>
<table class="table table-dark table-striped-columns" border="1">
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>NISN</th>
        <th>Aksi</th>
    </tr>

    @foreach ($students as $s)
    <tr>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->kelas }}</td>
        <td>{{ $s->nisn }}</td>
        <td>           
            <a href="/#/">edit</a>
        </td>
    </tr>
    @endforeach
</table>