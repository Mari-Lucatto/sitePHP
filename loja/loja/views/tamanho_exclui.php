<?php
    include("../bd/conexao.php");
    include("../controls/tamanho.php");
    $id=$_GET['id'];
    if(excluir_tamanho($conexao, $id))
    {
        header("Location: tamanho_lista.php");
        die();
    }
?>