<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">

    <title>Lista de Cores</title>
</head>
<body>
<div class="content text-center">
    <center>
    <br><h1>Lista de Cores</h1>
    <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<table border="3" class="table table-dark table-striped">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Tom</td>
            <td>Alterar</td>
            <td>Excluir</td>
        </tr>
        <?php
            include("../bd/conexao.php");
            include("../controls/cor.php");
            $cores= listar_cor($conexao);
            foreach($cores as $cor):
        ?>
        <tr>
            <td><?=$cor['id_cor']?></td>
            <td><?=$cor['nome']?></td>
            <td><?=$cor['tom']?></td>

            <td><a href="cor_altera.php?id=<?=
            $cor['id_cor']?>">Alterar</a></td>
            <td><a href="cor_exclui.php?id=<?=
            $cor['id_cor']?>">Excluir</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</ul>  
        </p>
      </div>
    </center>
</body>
</html>