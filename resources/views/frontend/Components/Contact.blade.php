<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Toko Kami</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        .contact-section {
            padding: 60px 0;
        }
        .map-container {
            width: 100%;
            height: 400px; /* Tinggi peta */
        }
    </style>
</head>
<body>

<div class="container contact-section">
    <h1 class="bg-success p-4 rounded-md text-light ms-2" style="width: max-content">Kontak Kami</h1>
    <p class="lead ms-2">Jika Anda memiliki pertanyaan, silakan hubungi kami melalui formulir di bawah ini.</p>

    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-md-6 col-sm-12 col-lg-5 ms-2">
            <h2>Formulir Kontak</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Kirim Pesan</button>
            </form>
        </div>

        <div class="col-md-6 col-sm-12 col-lg-5 ms-2">
            <h2>Peta Lokasi Kami</h2>
            <!-- Menyematkan Google Maps -->
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.683728838511!2d107.6198273144352!3d-6.928355569741015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e87ffb3736a5%3A0x1fa0782bad367c26!2sWebhozz+Bandung!5e0!3m2!1sid!2sid!4v1512984270823"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>
</html>