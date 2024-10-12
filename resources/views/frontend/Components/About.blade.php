<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Toko Kami</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .about-section {
            padding: 60px 15px; /* Menambahkan padding horizontal untuk responsivitas */
        }
        .about-header {
            margin-bottom: 40px;
        }
        .about-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .icon {
            font-size: 50px; /* Ukuran ikon */
            color: #28a745; /* Warna ikon */
        }
    </style>
</head>
<body>

<div class="container about-section">
    <div class="about-header ">
        <h1 class="bg-success p-4 rounded-md text-light" style="width: max-content ">Tentang Kami</h1>
        <p class="lead">Kami adalah toko yang menyediakan produk berkualitas dengan layanan terbaik.</p>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12 d-flex justify-content-center"> <!-- Justify center untuk mobile -->
            <img src="{{asset('images/frofile-toko.jpeg')}}" alt="Toko Kami" class="about-image img-fluid"> <!-- img-fluid untuk responsivitas -->
        </div>
        <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center"> <!-- Justify center untuk mobile -->
            <h2 class="bg-success p-2 rounded-3 text-light mt-2">Visi Kami</h2>
            <p>Kami berkomitmen untuk menyediakan produk berkualitas tinggi yang memenuhi kebutuhan pelanggan kami. Visi kami adalah menjadi toko pilihan utama di komunitas kami.</p>

            <h2 class="bg-warning p-2 rounded-3 text-light mt-2">Misi Kami</h2>
            <p>Misi kami adalah memberikan pengalaman berbelanja yang menyenangkan dengan layanan pelanggan yang ramah dan responsif, serta produk yang bermanfaat bagi kehidupan sehari-hari.</p>
        </div>
    </div>
<div class="team rounded-3 p-3 mt-4">
    <div class="about-header mt-5 ">
        <h1 class="bg-success p-4 rounded-md text-light" style="width: max-content ">Service</h1>
        <p class="lead">Kami adalah toko yang menyediakan produk berkualitas dengan layanan terbaik.</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 mb-4 d-flex justify-content-center"> <!-- Justify center untuk mobile -->
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-check-circle icon"></i> <!-- Ikon Kualitas -->
                    <h5 class="card-title mt-3">Kualitas Terbaik</h5>
                    <p class="card-text">Kami hanya menjual produk yang telah teruji kualitasnya untuk kepuasan Anda.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4 d-flex justify-content-center"> <!-- Justify center untuk mobile -->
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-smile-beam icon"></i> <!-- Ikon Pelayanan -->
                    <h5 class="card-title mt-3">Pelayanan Ramah</h5>
                    <p class="card-text">Tim kami siap membantu Anda dengan senyuman dan solusi terbaik.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4 d-flex justify-content-center"> <!-- Justify center untuk mobile -->
            <div class="card text-center">
                <div class="card-body">
                    <i class="fas fa-lightbulb icon"></i> <!-- Ikon Inovasi -->
                    <h5 class="card-title mt-3">Inovasi Berkelanjutan</h5>
                    <p class="card-text">Kami selalu mencari cara baru untuk meningkatkan produk dan layanan kami.</p>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>
</html>