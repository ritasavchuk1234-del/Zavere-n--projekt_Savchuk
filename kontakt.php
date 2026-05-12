<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Kontaktujte nás – Japonsko projekt">
    <meta name="keywords" content="Japonsko, kontakt, formulár, email, telefón">
    <meta name="author" content="Marharyta Savchuk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vlástne štýly -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--  Navigácia -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">Japonsko</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.html">Domov</a></li>
                <li class="nav-item"><a class="nav-link" href="o_nas.html">O Japonsku</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="galeria.html">Galéria</a></li>
                <li class="nav-item"><a class="nav-link active" href="kontakt.html">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>

<!--  Obsah stránky -->
<div class="container mt-5 pt-4">
    <h1 class="text-center mb-4">Kontaktujte nás</h1>

    <div class="row">
        <div class="col-md-6 mb-4">

            <h3>Kontakt</h3>
            <p><strong>Email:</strong> <a href="mailto:info@japonsko.sk">info@japonsko.sk</a></p>
            <p><strong>Telefón:</strong> <a href="tel:+421950775281">+421 950 775 281</a></p>
            <p>Ak máte otázky o projekte, napíšte nám prostredníctvom formulára.</p>

        </div>

        <div class="col-md-6 mb-5">
            <h3>Kontaktný formulár</h3>

            <form id="contactForm" action="thankyou.html" method="GET">

                <div class="mb-3">
                    <label for="name" class="form-label">Meno:</label>
                    <input type="text" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Správa:</label>
                    <textarea id="message" rows="4" class="form-control" required></textarea>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="gdpr" required>
                    <label for="gdpr" class="form-check-label">
                        Súhlasím so spracovaním osobných údajov
                    </label>
                </div>

                <button type="submit" class="btn btn-dark w-100">Odoslať</button>

            </form>

        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-4">
    <p class="mb-0">&copy; 2025 Japonsko – študentský projekt | Marharyta Savchuk</p>
</footer>

<!--  Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!--  Validácia formulára -->
<script src="js/app.js"></script>

</body>
</html>
