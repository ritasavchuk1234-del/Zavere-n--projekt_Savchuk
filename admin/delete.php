<?php

require '../classes/Database.php';

$database = new Database();

$db = $database->connect();

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM articles WHERE id = :id";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':id', $id);

    $stmt->execute();
}

header("Location: ../blog.php");

exit;