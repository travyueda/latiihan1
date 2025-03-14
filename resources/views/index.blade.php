<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input[type="text"], input[type="number"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="file"] {
            padding: 6px;
            background-color: #f7f7f7;
        }
    </style>
</head>
<body>
    <div>
        <h1>Pendaftaran Lomba Desain Poster</h1>
        <form method="POST" action="/kirim" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Nama Lengkap"></br>
            <input type="number" name="kelas" placeholder="Kelas"></br>
            <input type="text" name="judul" placeholder="Judul Poster"></br>
            <input type="file" name="poster"> </br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
