<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">

    <title>Cadastro de Tamanhos</title>
</head>
<body>

<div class="content text-center">
    <center>
    <br><h1>Cadastro de Tamanhos</h1>
    <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<form action="" method="post">

    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="nome">
        <option selected>Selecione o tamanho</option>
        <option value="PP">PP</option>
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
    </select>
        <br><button type="submit" class="btn btn-secondary">Cadastrar</button> <br>
    </form>
</ul>  
        </p>
      </div>
    <?php
    include("../bd/conexao.php");
    include("../controls/tamanho.php");
    if($_POST)
    {
        $tipo= $_POST['nome'];
        if(inserir_tamanho($conexao,$tipo)){
            echo("Cadastrado com sucesso");
        }else{
            $msg=mysqli_error($conexao);
            echo($msg);
        }
    }
    ?>
</body>
</html>