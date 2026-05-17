<?php

session_start();

require 'classes/Database.php';
require 'classes/Article.php';

$database = new Database();
$db = $database->connect();

$articleModel = new Article($db);

$articles = $articleModel->getAll();
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Blog – Japonsko, kultúra, tradície, jedlo, cestovanie">
    <meta name="keywords" content="Japonsko, blog, kultúra, cestovanie, kuchyňa">
    <meta name="author" content="Marharyta Savchuk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Japonsko</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vlastné štýly -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navigácia -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Japonsko</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Domov</a></li>
                <li class="nav-item"><a class="nav-link" href="o_nas.php">O Japonsku</a></li>
                <li class="nav-item"><a class="nav-link active" href="blog.php">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="galeria.php">Galéria</a></li>
                <li class="nav-item"><a class="nav-link" href="kontakt.php">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Obsah -->
<div class="container mt-5 pt-5">
    
    <h1 class="text-center mb-5">Blog o Japonsku</h1>

<?php foreach ($articles as $article): ?>

    <article class="blog-card mb-5 p-4 shadow rounded">

        <h2 class="mb-3">
            <?= htmlspecialchars($article['title']) ?>
        </h2>

        <p class="text-muted">
            <?= $article['created_at'] ?>
        </p>

        <?php if ($article['image']): ?>

        <img src="img/<?= htmlspecialchars($article['image']) ?>"
             class="img-fluid rounded mb-3"
             alt="Article image">

        <?php endif; ?>

        <p class="blog-text">
            <?= nl2br(htmlspecialchars($article['content'])) ?>
        </p>

        <?php if (isset($_SESSION['user'])): ?>

            <a href="admin/delete.php?id=<?= $article['id'] ?>"
            class="btn btn-danger mt-3"
            onclick="return confirm('Naozaj chcete zmazať článok?')">
                
                Zmazať
                
            </a>
        
            <a href="admin/edit.php?id=<?= $article['id'] ?>"
            class="btn btn-warning mt-3 ms-2">

                Upraviť
        
            </a>
        <?php endif; ?>

    </article>

<?php endforeach; ?>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-4">
    <p class="mb-0">&copy; 2026 Japonsko – študentský projekt | Marharyta Savchuk</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vlastný JS -->
<script src="js/app.js"></script>
</body>
</html>
