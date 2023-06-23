<?php

$dsn = "mysql:host=localhost;dbname=intwoafrica";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed" . $e->getMessage();
}



require 'vendor/autoload.php';

use Allankayz\Intwoafrica\Connection as Connection;

try {
    Connection::get()->connect();
    echo 'A connection to the database server has been established successfully.';
} catch (\PDOException $e) {
    echo ($e->getMessage());
}