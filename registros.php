<?php
require 'conexao.php';

$sql = "SELECT s.data_hora_saida, u.nome, u.matricula, u.curso
        FROM saidas s
        JOIN usuario u ON s.id_aluno_fk = u.id_aluno
        ORDER BY s.data_hora_saida DESC";

$stmt = $pdo->query($sql);
$registros = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registros de Ponto</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { padding: 8px; border: 1px solid #ccc; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h2>Registros de Ponto</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Curso</th>
            <th>Data e Hora da Saída</th>
        </tr>
        <?php foreach ($registros as $r): ?>
        <tr>
            <td><?= htmlspecialchars($r['nome']) ?></td>
            <td><?= htmlspecialchars($r['matricula']) ?></td>
            <td><?= htmlspecialchars($r['curso']) ?></td>
            <td><?= htmlspecialchars($r['data_hora_saida']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
