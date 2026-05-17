<?php

session_start();

require 'classes/Database.php';

$database = new Database();
$db = $database->connect();

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':username', $username);

    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user'] = $user['username'];

        header("Location: blog.php");

        exit;

    } else {

        $error = "Nesprávne meno alebo heslo.";
    }
}
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">Prihlásenie</h1>

    <?php if ($error): ?>

        <div class="alert alert-danger">

            <?= $error ?>

        </div>

    <?php endif; ?>

    <form method="POST">

        <div class="mb-3">

            <label class="form-label">
                Používateľské meno
            </label>

            <input type="text"
                   name="username"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label class="form-label">
                Heslo
            </label>

            <input type="password"
                   name="password"
                   class="form-control"
                   required>

        </div>

        <button type="submit"
                class="btn btn-dark">

            Prihlásiť sa

        </button>

    </form>

</div>

</body>
</html>