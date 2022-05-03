
<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "laravel";

$pdo = new PDO("mysql:host=$hostname;dbname=$database", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));

$pdo = null;
?>