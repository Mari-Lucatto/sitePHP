<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">

    <title>Lista de Tamanho</title>
</head>
<body>
<div class="content text-center">
    <center>
    <br><h1>Lista de Tamanho</h1>
    <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<table border="3" class="table table-dark table-striped">
        <tr>
            <td>Id</td>
            <td>Tipo</td>
            <td>Alterar</td>
            <td>Excluir</td>
        </tr>
        <?php
            include("../bd/conexao.php");
            include("../controls/tamanho.php");
            $tamanhos= listar_tamanho($conexao);
            foreach($tamanhos as $tamanho):
        ?>
        <tr>
            <td><?=$tamanho['id_tamanho']?></td>
            <td><?=$tamanho['tipo']?></td>

            <td><a href="tamanho_altera.php?id=<?=
            $tamanho['id_tamanho']?>">Alterar</a></td>
            <td><a href="tamanho_exclui.php?id=<?=
            $tamanho['id_tamanho']?>">Excluir</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</ul>  
        </p>
      </div>
    </center>
</body>
</html>