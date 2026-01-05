<form action="/kirim" method="POST">
    @csrf
    <label>Nama:</label>
    <input type="text" name="nama">
    <br>
    <label>Alamat:</label>
    <input type="text" name="alamat">
    <br>
    <label>Sekolah:</label>
    <input type="text" name="sekolah">
    <br>
    <label>Kelas:</label>
    <input type="text" name="kelas">
    <button type="submit">Kirim</button>
</form>

