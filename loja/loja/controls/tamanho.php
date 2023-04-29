<?php

    //função inserir
    function inserir_tamanho($conexao, $tipo){
        $sql= "insert into tbl_tamanho values (default, '$tipo')";
        return mysqli_query($conexao, $sql);
    }

    //função alterar
    function alterar_tamanho($conexao, $tipo, $id_tamanho){
        $sql= "update tbl_tamanho set tipo='$tipo' where id_tamanho=$id_tamanho";
        return mysqli_query($conexao, $sql);
    }

    //função excluir
    function excluir_tamanho($conexao, $id_tamanho){
        $sql= "delete from tbl_tamanho where id_tamanho= $id_tamanho";
        return mysqli_query($conexao, $sql);
    }

    //função listar
    function listar_tamanho($conexao){
        $tamanhos= array();
        $resultado= mysqli_query($conexao, "select*from tbl_tamanho");
        while($tamanho= mysqli_fetch_assoc($resultado)){
            array_push($tamanhos, $tamanho);
        }
        return $tamanhos;
    }

    //função buscar
    function buscar_tamanhos($conexao, $id_tamanho){
        $resultado= mysqli_query($conexao, "select * from tbl_tamanho where id_tamanho= $id_tamanho");
        return mysqli_fetch_assoc($resultado);
    }
?>