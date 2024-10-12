<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman Login</title>
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
        }
        .login-container {
            max-width: 400px; /* Lebar maksimum form */
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
    <h1 class="text-center mb-4"> Login</h1>
    <div class="login-container">
        <form action="{{route('login.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Masuk</button>
        </form>
        <p class="text-center mt-3">Belum punya akun? <a href="/register">Daftar di sini</a></p>
        <p class="text-center"><a href="#">Lupa Password?</a></p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>