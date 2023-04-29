<?php
    include("../bd/conexao.php");
    include("../controls/cor.php");
    $id=$_GET['id'];
    if(excluir_cor($conexao, $id))
    {
        header("Location: cor_lista.php");
        die();
    }
?>