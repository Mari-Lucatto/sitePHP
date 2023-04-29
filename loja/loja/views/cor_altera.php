<?php
    include("../bd/conexao.php");
    include("../controls/cor.php");
    $id=$_GET['id'];
    $cor= buscar_cor($conexao, $id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <title>Alterar Cores</title>
</head>
<body>
<div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<div class="content text-center">
    <h1>Alterar Cores</h1><br>
</div>
    <form acion="" method="post">

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_id">Código: </label>
        <input type="number" name="id" class="form-control" id="exampleFormControlInput1" placeholder="Digite o código" 
        value="<?=$cor['id_cor']?>" readonly><br>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_nome">Nome da Cor: </label>
        <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite o nome da Cor" 
        value="<?=$cor['nome']?>"><br>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_tom">Tom da Cor: </label>
        <input type="text" name="tom" class="form-control" id="exampleFormControlInput1" placeholder="Digite a tonalidade" 
        value="<?=$cor['tom']?>"><br>
        </div>

        <div class="content text-center">
        <button type="submit" class="btn btn-secondary">Alterar</button> 
</div>
</div>
    </form>
</ul>  
        </p>
      </div>
    </form>
    <?php
        if($_POST)
        {
            $id=$_POST['id'];
            $nome=$_POST['nome'];
            $tom=$_POST['tom'];
            if(alterar_cor($conexao, $nome, $tom, $id))
            {
                echo("Alterado com sucesso");
                header("Location: cor_lista.php");
            }
            else
            {
                $msg= mysqli_error($conexao);
                echo($msg);
            }
        }
?>
</body>
</html>