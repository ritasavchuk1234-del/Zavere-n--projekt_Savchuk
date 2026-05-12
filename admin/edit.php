<?php

require '../classes/Database.php';

$database = new Database();

$db = $database->connect();

if (!isset($_GET['id'])) {
    die("ID not found.");
}

$id = $_GET['id'];

$sql = "SELECT * FROM articles WHERE id = :id";

$stmt = $db->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();

$article = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$article) {
    die("Article not found.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $content = $_POST['content'];

    $updateSql = "UPDATE articles
                  SET title = :title,
                      content = :content
                  WHERE id = :id";

    $updateStmt = $db->prepare($updateSql);

    $updateStmt->bindParam(':title', $title);
    $updateStmt->bindParam(':content', $content);
    $updateStmt->bindParam(':id', $id);

    $updateStmt->execute();

    header("Location: ../blog.php");

    exit;
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">

    <title>Upraviť článok</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">Upraviť článok</h1>

    <form method="POST">

        <div class="mb-3">

            <label class="form-label">
                Názov článku
            </label>

            <input type="text"
                   name="title"
                   class="form-control"
                   value="<?= htmlspecialchars($article['title']) ?>"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Obsah článku
            </label>

            <textarea name="content"
                      class="form-control"
                      rows="8"
                      required><?= htmlspecialchars($article['content']) ?></textarea>

        </div>

        <button type="submit"
                class="btn btn-dark">

            Uložiť zmeny

        </button>

    </form>

</div>

</body>
</html>