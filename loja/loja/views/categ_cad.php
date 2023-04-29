
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <title>Cadastro de Categoria</title>
</head>
<body>
<br>
<div class="content text-center">
<h1>Cadastro de Categoria</h1>
</div>
        <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<form action="" method="post">

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome da Categoria: </label>
        <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite o nome da Categoria">
        </div><br>

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrição da Categoria:</label>
        <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Digite o nome da categoria"></textarea>
        </div><br>
        <div class="content text-center">
        <button type="submit" class="btn btn-secondary">Cadastrar</button> 
</div>
    </form>
</ul>  
        </p>
      </div>
    <?php
    include("../bd/conexao.php");
    include("../controls/categoria.php");
    if($_POST)
    {
        $nome= $_POST['nome'];
        $descricao= $_POST['descricao'];
        if(inserir_categoria($conexao,$nome,$descricao)){
            echo("Cadastrado com sucesso");
        }else{
            $msg=mysqli_error($conexao);
            echo($msg);
        }
    }
    ?>
</body>
</html>