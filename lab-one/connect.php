<?php
// connect.php
// This file contains the PDO database connection

$host = '127.0.0.1';   // server name
$port = 3307;           // MySQL port we changed
$db   = 'lab1db';       // database name
$user = 'root';         // username
$pass = '';             // password (XAMPP default root has no password)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
