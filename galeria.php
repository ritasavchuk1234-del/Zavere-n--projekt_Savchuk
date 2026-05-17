<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Galéria Japonska – mestá, príroda, jedlo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galéria Japonsko</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vlastné štýly -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require 'includes/nav.php'; ?>

<!-- Obsah -->
<div class="container mt-5 pt-4">

    <h1 class="text-center mb-4">Galéria Japonska</h1>
    <p class="text-center mb-5">
        Pozri si výber miest, prírody a jedál, ktoré reprezentujú krásu Japonska.
    </p>

    <div id="japanCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <!-- kreatívny bod – slideshow / carousel -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#japanCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#japanCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#japanCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Tokio_1.jpeg" class="d-block w-100" alt="Tokio v noci">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tokio</h5>
                    <p>Moderné mesto plné svetiel a energie.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Hora.jpeg" class="d-block w-100" alt="Hora Fuji">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hora Fuji</h5>
                    <p>Ikonický symbol Japonska a obľúbený cieľ turistov.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Sakúry.jpeg" class="d-block w-100" alt="Sakurou zakvitnuté stromy">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hanami</h5>
                    <p>Tradičné pozorovanie sakúr počas jari.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#japanCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Predchádzajúci</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#japanCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Ďalší</span>
        </button>
    </div>

    <!-- GRID GALÉRIA + LIGHTBOX -->
    <h2 class="mb-3">Fotogaléria</h2>
    <p class="mb-4">Kliknutím na obrázok si ho môžeš zobraziť vo väčšom.</p>

    <!-- kreatívny bod – lightbox galéria -->
    <div class="row g-3">
        <div class="col-6 col-md-4">
            <!--  Uloženie obrázku -->
            <img src="img/chrám.jpeg" class="img-fluid rounded shadow-sm gallery-img"
                 alt="Chrám v Kjóte" data-full="img/chrám.jpeg">
        </div>
        <div class="col-6 col-md-4">
            <!--  Uloženie obrázku -->
            <img src="img/pexels-ekrulila-32416024.jpg" class="img-fluid rounded shadow-sm gallery-img"
                 alt="Japonská ulica" data-full="img/pexels-ekrulila-32416024.jpg">
        </div>
        <div class="col-6 col-md-4">
            <!--  Uloženie obrázku -->
            <img src="img/ramen.jpeg" class="img-fluid rounded shadow-sm gallery-img"
                 alt="Ramen" data-full="img/ramen.jpeg">
        </div>
    </div>

</div>

<div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
    <!-- kreatívny bod – popup / lightbox -->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-body p-0">
                <img id="lightboxImage" src="" class="img-fluid w-100" alt="Zväčšený obrázok">
            </div>
            <div class="modal-footer justify-content-between">
                <span class="text-white" id="lightboxCaption"></span>
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Zavrieť</button>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-4">
    <p class="mb-0">&copy; 2025 Japonsko – študentský projekt | Marharyta Savchuk</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vlastný JS -->
<script src="js/app.js"></script>
</body>
</html>