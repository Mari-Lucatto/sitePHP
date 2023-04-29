<?php

    //função inserir
    function inserir_categoria($conexao, $nome, $descricao){
        $sql= "insert into tbl_categoria values (default, '$nome', '$descricao')";
        return mysqli_query($conexao, $sql);
    }

    //função alterar
    function alterar_categoria($conexao, $nome, $descricao, $id_categoria){
        $sql= "update tbl_categoria set nome='$nome', descricao='$descricao' where id_categoria=$id_categoria";
        return mysqli_query($conexao, $sql);
    }

    //função excluir
    function excluir_categoria($conexao, $id_categoria){
        $sql= "delete from tbl_categoria where id_categoria= $id_categoria";
        return mysqli_query($conexao, $sql);
    }

    //função listar
    function listar_categoria($conexao){
        $categorias= array();
        $resultado= mysqli_query($conexao, "select*from tbl_categoria");
        while($categoria= mysqli_fetch_assoc($resultado)){
            array_push($categorias, $categoria);
        }
        return $categorias;
    }

    //função buscar
    function buscar_categoria($conexao, $id_categoria){
        $resultado= mysqli_query($conexao, "select * from tbl_categoria where id_categoria= $id_categoria");
        return mysqli_fetch_assoc($resultado);
    }
?>