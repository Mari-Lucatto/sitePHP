<?php
    include("../bd/conexao.php");
    include("../controls/tamanho.php");
    $id=$_GET['id'];
    $tamanho= buscar_tamanhos($conexao, $id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <title>Alterar Tamanhos</title>
</head>
<body>
<div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<div class="content text-center">
    <h1>Alterar Tamanhos</h1><br>
    </div>
    <form acion="" method="post">

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_id">Código: </label>
        <input type="number" name="id" class="form-control" id="exampleFormControlInput1" placeholder="Digite o código" 
        value="<?=$tamanho['id_tamanho']?>" readonly><br>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_tipo">Tipo de Tamanho: </label>
        <input type="text" name="tipo" class="form-control" id="exampleFormControlInput1" placeholder="Escolha o tipo do tamanho" 
        value="<?=$tamanho['tipo']?>"><br>
        </div>
        <div class="content text-center">
        <button type="submit" class="btn btn-secondary">Alterar</button> 
    </div>
    </form>
</div>
    </form>
</ul>  
        </p>
      </div>
    <?php
        if($_POST)
        {
            $id=$_POST['id'];
            $tipo=$_POST['tipo'];
            if(alterar_tamanho($conexao, $tipo, $id))
            {
                echo("Alterado com sucesso");
                header("Location: tamanho_lista.php");
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