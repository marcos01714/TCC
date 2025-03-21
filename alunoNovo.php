

<?php include "cabecalho.php"; 

if( isset($_POST['nome']) && !empty($_POST['nome']) &&
    isset($_POST['matricula']) && !empty($_POST['matricula']) &&
    isset($_POST['curso']) && !empty($_POST['curso']) &&
    isset($_POST['telefone']) && !empty($_POST['telefone']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['ativo']) && !empty($_POST['ativo']) &&
    isset($_POST['placa_veiculo']) && !empty($_POST['placa_veiculo']) )
{

   if(empty($_POST["nome"]) )
    {
        echo "<br>
            <div class='alert alert-danger mt-2'>
                 Campo nome não pode estar vazio
            </div>";
    }
    else if(empty($_POST["matricula"]) )
    {
        echo "<br>
            <div class='alert alert-danger mt-2'>
                 Campo matrícula não pode estar vazio
            </div>";
    }
    else if(empty($_POST["curso"]) )
    {
        echo "<br>
            <div class='alert alert-danger mt-2'>
                 Campo curso não pode estar vazio
            </div>";
    }
    else if(empty($_POST["telefone"]) )
    {
        echo "<br>
            <div class='alert alert-danger mt-2'>
                 Campo telefone não pode estar vazio
            </div>";
    }
    else if(empty($_POST["email"]) )
    {
        echo "<br>
            <div class='alert alert-danger mt-2'>
                 Campo email não pode estar vazio
            </div>";
    }
    else if(empty($_POST["ativo"]) )
    {
        echo "<br>
            <div class='alert alert-danger mt-2'>
                 Campo ativo não pode estar vazio
            </div>";
    }
    else if(empty($_POST["placa_veiculo"]) )
    {
        echo "<br>
            <div class='alert alert-danger mt-2'>
                 Campo placa do veículo não pode estar vazio
            </div>";
    }
    else
    {
        include "conexao.php";
        $nome = $row["nome"];
        $matricula = $row["matricula"];
        $curso = $row["curso"];
        $telefone = $row["telefone"];
        $email = $row["email"];
        $ativo = $row["ativo"];
        $placa_veiculo = $row["placa_veiculo"];
        $query = "INSERT INTO usuario (nome, matricula, curso, telefone, email, ativo, placa_veiculo) VALUES ( '$_POST[nome]', '$_POST[matricula]', '$_POST[curso]', '$_POST[telefone]', '$_POST[email]', '$_POST[ativo]', '$_POST[placa_veiculo]') ";
        $resultado = $conexao->query($query);
        if($resultado)
        {
                // echo "<div class='alert alert-success mt-2'>
                //          Salvo no banco com sucesso 
                //       </div>" ;
                header("location: aluno.php");
            }else{
                echo "<div class='alert alert-danger mt-2'>
                         Ocorreu algum erro ao salvar
                      </div>" ;
            }
        }
       
}
else
{
$nome = "";
$matricula = "";
$curso = "";
$telefone = "";
$email = "";
$ativo = "";
$placa_veiculo = "";
}
?>
<br>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card">
        <div class="card-header text-white" style="background-color: #385263;">
                Cadastrar novo aluno
            </div>
            <div class="card-body">
                <form action="alunoNovo.php" method="post">
                    <label>Nome</label>
                    <input class="form-control" type="text" name="nome" value="<?php echo $nome; ?>" />
                    <br>
                    <label>Matrícula</label>
                    <input class="form-control" type="text" name="matricula" value="<?php echo $matricula; ?>" />
                    <br>
                    <label>Curso</label>
                    <input class="form-control" type="text" name="curso" value="<?php echo $curso; ?>" />
                    <br>
                    <label>Telefone</label>
                    <input class="form-control" type="text" name="telefone" value="<?php echo $telefone; ?>" />
                    <br>
                    <label>Email</label>
                    <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" />
                    <br>
                    <label>Ativo</label>
                    <input class="form-control" type="text" name="ativo" value="Sim<?php echo $ativo; ?>" readonly  />
                    <br>
                    <label>Placa do Veículo</label>
                    <input class="form-control" type="text" name="placa_veiculo" value="<?php echo $placa_veiculo; ?>" />
                    <br>
                    
                    <button type='submit' class='btn btn-success'>
                        Salvar
                    </button>
                </form>
            </div>
        </div>    


    </div>
    <div class="col-4"></div>
</div>
<?php include "rodape.php"; ?>