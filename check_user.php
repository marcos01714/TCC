<?php
require 'conexao.php';

$uid = $_GET['uid'] ?? '';

if (empty($uid)) {
    http_response_code(400);
    echo "UID ausente";
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM tag_nfc WHERE codigo_tag = ?");
$stmt->execute([$uid]);

if ($stmt->rowCount() > 0) {
    echo "OK";
} else {
    echo "NOTFOUND";
}
