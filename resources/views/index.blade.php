<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pendaftaran Lomba Desain Poster</h1>
    <form method="POST" action="/kirim" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nama Lengkap"></br>
        <input type="number" name="kelas" placeholder="Kelas"></br>
        <input type="text" name="judul" placeholder="Judul Poster"></br>
        <input type="file" name="poster"> </br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>