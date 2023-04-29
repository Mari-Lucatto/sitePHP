<!DOCTYPE html>
<?php
    //tive que fazer essa parte do código pq faz parte do funcionamento da tela de menu
    session_start();
    if($_SESSION['log'] != "ativo")
    {
        session_destroy();
        header("Location: pag_login.php");
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <title>Lista de Roupas</title>
</head>
<body>
    <center>
    <div class="content text-center">
    <br><h1>Lista de Roupas</h1>
<div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<table border="3" class="table table-dark table-striped">
        <tr>
            <td>Id</td>
            <td>Tamanho</td>
            <td>Categoria</td>
            <td>Cor</td>
            <td>Imagem</td>
            <td>Nome</td>
            <td>Quantidade</td>
            <td>Preço</td>
            <td>Detalhes</td>
            <td>Alterar</td>
            <td>Excluir</td>

        </tr>
        <?php
            include("../bd/conexao.php");
            include("../controls/roupa.php");
            $roupas= listar_roupa($conexao);
            foreach($roupas as $roupa):
    
        ?>
        <tr>
            <td><?=$roupa['id_roupa']?></td>
            <td><?=$roupa['tamanho']?></td>
            <td><?=$roupa['cor']?></td>
            <td><?=$roupa['categoria']?></td>
            <td><?=$roupa['imagem']?></td>
            <td><?=$roupa['nome']?></td>
            <td><?=$roupa['quantidade']?></td>
            <td><?=$roupa['preço']?></td>
            <td><?=$roupa['detalhes']?></td>

            <td><a href="roupa_altera.php?id=<?=
            $roupa['id_roupa']?>">Alterar</a></td>
            <td><a href="roupa_exclui.php?id=<?=
            $roupa['id_roupa']?>">Excluir</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</ul>  
        </p>
      </div>
</head>
    </center>
<body>
    
</body>
</html>