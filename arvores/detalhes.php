<?php
header('Content-Type: application/json');
include '../config/DBconection.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$stmt = $pdo->prepare("SELECT * FROM arvores WHERE id = ?");
$stmt->execute([$id]);
$arvore = $stmt->fetch(PDO::FETCH_ASSOC);

if ($arvore) {
    echo json_encode($arvore);
} else {
    echo json_encode(['erro' => 'Árvore não encontrada']);
}
?>