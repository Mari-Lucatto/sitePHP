<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <title>Lista de Categorias</title>
</head>
<body>
<div class="content text-center">
    <center>
    <br><h1>Lista de Categorias</h1>
    <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<table border="3" class="table table-dark table-striped">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Alterar</td>
            <td>Excluir</td>
        </tr>
        <?php
            include("../bd/conexao.php");
            include("../controls/categoria.php");
            $categorias= listar_categoria($conexao);
            foreach($categorias as $categoria):
        ?>
        <tr>
            <td><?=$categoria['id_categoria']?></td>
            <td><?=$categoria['nome']?></td>
            <td><?=$categoria['descricao']?></td>

            <td><a href="categ_altera.php?id=<?=
            $categoria['id_categoria']?>">Alterar</a></td>
            <td><a href="categ_exclui.php?id=<?=
            $categoria['id_categoria']?>">Excluir</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</ul>  
        </p>
      </div>
    </center>
</body>
</html>