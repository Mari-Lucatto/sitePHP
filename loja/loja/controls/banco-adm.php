<?php
    function efetuarLogin($conexao, $login, $senha)
    {
        $sql="select * from usuario where login='{$login}'". 
        " and senha='{$senha}'";

        $resultado= mysqli_query($conexao, $sql);

        return mysqli_fetch_assoc($resultado);
    }
?>