<?php
$host = 'localhost';
$db = 'api_arvores';
$user = 'root';
$pass = ''; // coloque sua senha aqui, se tiver

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}
?>