<?php
require 'conexao.php';

$uid = $_GET['uid'] ?? '';

if (empty($uid)) {
    http_response_code(400);
    echo "UID ausente";
    exit;
}

$stmt = $pdo->prepare("SELECT id_aluno_fk FROM tag_nfc WHERE codigo_tag = ?");
$stmt->execute([$uid]);

if ($row = $stmt->fetch()) {
    $id_aluno = $row['id_aluno_fk'];

    $stmtInsert = $pdo->prepare("INSERT INTO saidas (id_aluno_fk, data_hora_saida) VALUES (?, NOW())");
    $stmtInsert->execute([$id_aluno]);

    echo "Ponto registrado com sucesso.";
} else {
    echo "Cartão não encontrado.";
}
