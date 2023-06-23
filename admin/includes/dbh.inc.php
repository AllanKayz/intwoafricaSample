<?php
echo "Heloo";

$dsn = "mysql:host=localhost;dbname=intwoafrica";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'A connection to the PostgreSQL database server has been established successfully.';
} catch (PDOException $e) {
    echo "Connection Failed" . $e->getMessage();
}