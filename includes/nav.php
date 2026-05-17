<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/Zaverečný%20projekt_Savchuk/index.php"

            >Japonsko

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Domov</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">O Japonsku</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="galeria.php">Galéria</a></li>
                <li class="nav-item"><a class="nav-link active" href="kontakt.php">Kontakt</a></li>

                <?php if (isset($_SESSION['user'])): ?>

                    <li class="nav-item">
                        <a class="nav-link" 
                            href="/Zaverečný%20projekt_Savchuk/logout.php">

                            Odhlásiť sa

                        </a>

                    </li>

                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>