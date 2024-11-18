<?php

$host = 'localhost';
$dbname ='gym';
$username = 'root';
$dbpassword = '';



$dsn = "mysql:host=localhost;dbname=gym";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO("mysqul:host=$host,dbname=dbname", $dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}