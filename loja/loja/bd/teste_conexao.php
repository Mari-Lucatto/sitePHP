<?php
    include("conexao.php");
    if(!$conexao){
        echo("Não foi possível se conectar ao banco");
        exit;
    }else{
        echo("Conexão criada com sucesso");
    }
?>