<?php
header('Content-Type: application/json');
include '../config/DBconection.php';

$stmt = $pdo->prepare("SELECT * FROM arvores");
$stmt->execute();
$arvores = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($arvores);
?>