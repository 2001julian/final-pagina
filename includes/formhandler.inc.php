<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];

try {
    require_once "dbh.inc.php"
    $query = "Insert Into users (username, pwd, email VALUES 
    (?, ?, ?);";

    $stmt = $pdo->prepare($query);

    $stme->execute([$username,$pwd,$email]);

    $pdo = null;
    $stme = null;

    header("Location: ../index");
    die();
} catch (PDOException $e) {
    die("Query failed: " . $e-> getMessage());
}

    } else {
        header("Location: ../index");
    }