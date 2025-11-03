<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
</html>