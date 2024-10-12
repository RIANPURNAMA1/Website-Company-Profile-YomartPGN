<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizontal Scroll Cards</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        .scroll-container {
            overflow-x: auto; /* Mengizinkan scroll horizontal */
            white-space: nowrap; /* Mencegah pembungkusan baris */
            padding: 20px 0; /* Padding atas dan bawah */
        }
        .card {
            display: inline-block; /* Menampilkan kartu dalam satu baris */
            width: 300px; /* Atur lebar kartu */
            margin-right: 15px; /* Jarak antar kartu */
        }
        /* Mengatur warna scrollbar untuk WebKit */
        .scroll-container::-webkit-scrollbar {
           * Tinggi scrollbar */
        }
        .scroll-container::-webkit-scrollbar-thumb {
            background-color: green; /* Warna thumb scrollbar */
            border-radius: 10px; /* Sudut thumb scrollbar */
        }
        .scroll-container::-webkit-scrollbar-track {
            background-color: #14f600; /* Warna track scrollbar */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="bg-success p-4 rounded-md text-light" style="width: max-content" >Gallery</h1>
    <p>Kami menyediakan berbagai kegiatan yang menarik</p>
    <div class="scroll-container">
        <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card 1">
            <div class="card-body">
                <h5 class="card-title">Kartu 1</h5>
                <p class="card-text">Deskripsi untuk kartu pertama.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card 2">
            <div class="card-body">
                <h5 class="card-title">Kartu 2</h5>
                <p class="card-text">Deskripsi untuk kartu kedua.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card 3">
            <div class="card-body">
                <h5 class="card-title">Kartu 3</h5>
                <p class="card-text">Deskripsi untuk kartu ketiga.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card 4">
            <div class="card-body">
                <h5 class="card-title">Kartu 4</h5>
                <p class="card-text">Deskripsi untuk kartu keempat.</p>
            </div>
        </div>

        <!-- Tambahkan lebih banyak kartu sesuai kebutuhan -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>
</html>