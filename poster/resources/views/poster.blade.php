<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Result</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">
    <div class="container mt-5">
        <h1 class="text-center text-dark mb-4">Poster Information</h1>
        <div class="card shadow-lg p-4 mb-4" style="max-width: 600px; margin: auto;">
            <div class="card-body">
                <h4 class="card-title text-center text-muted mb-3">Detail Poster</h4>
                <p><strong>Nama:</strong> {{ $data['name'] }}</p>
                <p><strong>Kelas:</strong> {{ $data['kelas'] }}</p>
                <p><strong>Judul Poster:</strong> {{ $data['poster'] }}</p>
                <p><strong>Poster:</strong></p>
                <div class="text-center">
                    <img src="{{ asset('storage/' . $data['file_poster']) }}" class="img-fluid rounded" alt="Poster" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="/form" class="btn btn-dark mb-3">Back to Form</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>