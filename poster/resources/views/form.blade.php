<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow-lg" style="width: 100%; max-width: 500px;">
            <div class="card-body">
                <h2 class="text-center mb-4">Poster Form</h2>
                <form action="/submit-poster" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas:</label>
                        <input type="text" class="form-control" name="kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="poster" class="form-label">Judul Poster:</label>
                        <input type="text" class="form-control" name="poster" required>
                    </div>
                    <div class="mb-3">
                        <label for="file_poster" class="form-label">File Poster:</label>
                        <input type="file" class="form-control" name="file_poster" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Save</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
