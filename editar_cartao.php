<?php
require 'conexao.php';

$uid = $_GET['uid'] ?? '';
$id_aluno = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uid = $_POST['uid'];
    $id_aluno = $_POST['id_aluno_fk'];

    $stmt = $pdo->prepare("SELECT id_tag FROM tag_nfc WHERE codigo_tag = ?");
    $stmt->execute([$uid]);

    if ($stmt->rowCount() > 0) {
        $stmt = $pdo->prepare("UPDATE tag_nfc SET id_aluno_fk = ? WHERE codigo_tag = ?");
        $stmt->execute([$id_aluno, $uid]);
        $msg = "Cartão atualizado com sucesso.";
    } else {
        $stmt = $pdo->prepare("INSERT INTO tag_nfc (codigo_tag, id_aluno_fk) VALUES (?, ?)");
        $stmt->execute([$uid, $id_aluno]);
        $msg = "Novo cartão cadastrado.";
    }
}

if (!empty($uid) && $_SERVER['REQUEST_METHOD'] !== 'POST') {
    $stmt = $pdo->prepare("SELECT * FROM tag_nfc WHERE codigo_tag = ?");
    $stmt->execute([$uid]);
    if ($dados = $stmt->fetch()) {
        $id_aluno = $dados['id_aluno_fk'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Cartão</title>
</head>
<body>
    <h2>Editar/Cadastrar Cartão RFID</h2>
    <?php if (!empty($msg)) echo "<p>$msg</p>"; ?>
    <form method="post">
        UID do Cartão: <input type="text" name="uid" value="<?= htmlspecialchars($uid) ?>" readonly><br><br>
        ID do Aluno: <input type="number" name="id_aluno_fk" value="<?= htmlspecialchars($id_aluno) ?>" required><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
