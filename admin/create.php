<?php

require '../classes/Database.php';

$database = new Database();

$db = $database->connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO articles (title, content)
            VALUES (:title, :content)";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);

    $stmt->execute();

    header("Location: ../blog.php");

    exit;
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Pridať článok</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">Pridať nový článok</h1>

    <form method="POST">

        <div class="mb-3">

            <label class="form-label">
                Názov článku
            </label>

            <input type="text"
                   name="title"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Obsah článku
            </label>

            <textarea name="content"
                      class="form-control"
                      rows="8"
                      required></textarea>

        </div>

        <button type="submit"
                class="btn btn-dark">

            Pridať článok

        </button>

    </form>

</div>

</body>
</html>