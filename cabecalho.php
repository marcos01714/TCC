<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial do Site</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <style>
        div {
            /* border: 1px solid; */
            /* margin: 1px; */
        }
    </style>
</head>
<body>

<?php
    // Detecta a página atual
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg" style="background-color: #c10001;" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Saída Fácil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'aluno.php') ? 'active' : '' ?>" href="aluno.php">Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'suporte.php') ? 'active' : '' ?>" href="suporte.php">Suporte</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="logoff.php">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <!-- Conteúdo da página -->
