<?php

$dsn = 'mysql:host=localhost;dbname=u139348721_jaysingh';
$username = 'u139348721_jaysingh';
$password = 'Think123';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}


