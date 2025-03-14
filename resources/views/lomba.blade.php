<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lomba Desain Poster</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        strong {
            color: #007bff;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Lomba Desain Poster</h1>
        <p><strong>Nama: </strong>{{ $nama }}</p>
        <p><strong>Kelas: </strong>{{ $kelas }}</p>
        <p><strong>Judul: </strong>{{ $judul }}</p>
        <p><strong>Poster:</strong></p>
        <img src="{{ $poster }}" alt="Poster Image"/>
    </div>
</body>
</html>
