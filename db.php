<?php
    $host = "localhost:3307";
    $user = "root";
    $password = "";
    $dbname = "restapi";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>
