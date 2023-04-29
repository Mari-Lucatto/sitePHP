<?php
    include("../bd/conexao.php");
    include("../controls/roupa.php");
    $id=$_GET['id'];
    if(excluir_roupa($conexao, $id))
    {
        header("Location: roupa_lista.php");
        die();
    }
?>

