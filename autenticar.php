<?php session_start(); 

include "conexao.php";

if( (isset($_POST["username"]) && !empty($_POST["username"]) )
    && (isset($_POST["password"]) && !empty($_POST["password"]) )
){

    $sql = "Select Id from admin where username = '$_POST[username]' AND password = '$_POST[password]'";
    $resultado = $conexao->query($sql);

    if($resultado->num_rows > 0)
    {
        $admin = $resultado->fetch_assoc();
        $idAdmin = $admin['Id'];
        $_SESSION["AdminLogado"] = $_POST["username"];
        $_SESSION["Logado"] = true;

        header("location: aluno.php");
    }
    else
    {
        header("location: login.php?erro=login e senha incorreto");
    }

}

?>