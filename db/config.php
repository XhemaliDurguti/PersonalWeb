<?php 
    $host = 'localhost';
    $db = 'portfolio';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $username = "root";
    $password = "";
    $pdo = new PDO($dsn,$username,$password);
    // print_r($pdo);

    
?>