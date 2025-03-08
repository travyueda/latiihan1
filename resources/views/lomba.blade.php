<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lomba Desain Poster</h1>
    <p><strong>Nama: </strong>{{ $nama }}</p>
    <p><strong>Kelas: </strong>{{ $kelas }}</p>
    <p><strong>Judul: </strong>{{ $judul }}</p>
    <p><strong>Poster:</strong></p>
    <img src="{{ $poster }}"/>
</body>
</html>