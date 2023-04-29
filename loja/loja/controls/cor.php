<?php

    //função inserir
    function inserir_cor($conexao, $nome, $tom){
        $sql= "insert into tbl_cor values (default, '$nome', '$tom')";
        return mysqli_query($conexao, $sql);
    }

    //função alterar
    function alterar_cor($conexao, $nome, $tom, $id_cor){
        $sql= "update tbl_cor set nome='$nome', tom='$tom' where id_cor=$id_cor";
        return mysqli_query($conexao, $sql);
    }

    //função excluir
    function excluir_cor($conexao, $id_cor){
        $sql= "delete from tbl_cor where id_cor= $id_cor";
        return mysqli_query($conexao, $sql);
    }

    //função listar
    function listar_cor($conexao){
        $cores= array();
        $resultado= mysqli_query($conexao, "select*from tbl_cor");
        while($cor= mysqli_fetch_assoc($resultado)){
            array_push($cores, $cor);
        }
        return $cores;
    }

    //função buscar
    function buscar_cor($conexao, $id_cor){
        $resultado= mysqli_query($conexao, "select * from tbl_cor where id_cor= $id_cor");
        return mysqli_fetch_assoc($resultado);
    }
?>