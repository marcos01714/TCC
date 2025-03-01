<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- A div do login-container vai ter a imagem de fundo -->
    <div class="login-container">
        <h2>Saída Fácil</h2>
        <form action="autenticar.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Log In</button>
            <br>
            <?php 
                if(isset($_GET["erro"]) && !empty($_GET["erro"]))
                {
                    echo "<div class='alert alert-danger'>";
                    echo $_GET["erro"];
                    echo "</div>";
                }
            ?>
        </form>
    </div>
</body>
</html>
