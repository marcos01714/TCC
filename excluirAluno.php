<?php

if( !empty($_GET['id_aluno']) && isset( $_GET['id_aluno'] ) )
{
    //Logica da exclusão
    include 'conexao.php';
    $sql = "
    DELETE FROM tag_nfc WHERE id_aluno_fk = $_GET[id_aluno];
    DELETE FROM saidas WHERE id_aluno_fk = $_GET[id_aluno];
    DELETE FROM usuario WHERE id_aluno = $_GET[id_aluno];
";
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        header('location: aluno.php');
    }
    else
    {
        //aqui vai uma lógica caso o delete from não funcione
        //aqui fica o mesmo redirecionamento porem com a mensagem de erro
    }
}
else
{
    header('location: aluno.php');
}



?>