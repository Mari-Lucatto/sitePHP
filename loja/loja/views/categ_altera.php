<?php
    include("../bd/conexao.php");
    include("../controls/categoria.php");
    $id=$_GET['id'];
    $categoria= buscar_categoria($conexao,$id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Categoria</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">

</head>
<body>
<div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<form action="" method="post">

        <div class="mb-3">
        <div class="content text-center">

    <h1>Alterar Categorias</h1><br>
</div>
    <form acion="" method="post">

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_id">Código: </label>
        <input type="number" name="id" class="form-control" id="exampleFormControlInput1" placeholder="Digite o código" 
        value="<?=$categoria['id_categoria']?>" readonly><br>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_nome">Nome da Categoria: </label>
        <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite o nome da Categoria" 
        value="<?=$categoria['nome']?>"><br>
        </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_nome">Descrição da Categoria: </label>
        <input type="text" name="descricao" class="form-control" id="exampleFormControlInput1" placeholder="Digite a descrição" 
        value="<?=$categoria['descricao']?>"><br>
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
            $descricao=$_POST['descricao'];
            if(alterar_categoria($conexao, $nome, $descricao, $id))
            {
                echo("Alterado com sucesso!!");
                header("Location: categ_lista.php");
            }
            else
            {
                $msg=mysqli_error($conexao);
                echo($msg);
            }
        }
        ?>
</body>
</html>