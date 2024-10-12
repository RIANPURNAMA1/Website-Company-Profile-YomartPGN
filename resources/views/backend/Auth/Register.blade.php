<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman Registrasi</title>
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
        }
        .registration-container {
            max-width: 500px; /* Lebar maksimum form */
            margin: auto; /* Pusatkan form */
            padding: 20px; /* Padding di dalam form */
            background-color: white; /* Warna latar belakang form */
            border-radius: 8px; /* Sudut membulat */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Akun</h1>
    <div class="registration-container">
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Konfirmasi password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Daftar</button>
        </form>
        <p class="text-center mt-3">Sudah punya akun? <a href="/login">Masuk di sini</a></p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>