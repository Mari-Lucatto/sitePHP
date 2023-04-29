<?php

    //função inserir
    function inserir_roupa($conexao,$tbl_tamanho_id_tamanho, $tbl_categoria_id_categoria,
    $tbl_cor_id_cor,$img, $nome, $qtd, $preco, $detalhes){
        $sql= "insert into tbl_roupa values (default, $tbl_tamanho_id_tamanho, 
        $tbl_categoria_id_categoria,
        $tbl_cor_id_cor,'$img', '$nome', '$qtd', '$preco', '$detalhes')";
        return mysqli_query($conexao, $sql);
    }

    //função alterar
    function alterar_roupa($conexao,$tbl_tamanho_id_tamanho, $tbl_categoria_id_categoria,
    $tbl_cor_id_cor,$img, $nome, $preco, $qtd, $detalhes,$id_roupa){
        $sql= "update tbl_roupa set tbl_tamanho_id_tamanho=$tbl_tamanho_id_tamanho, tbl_categoria_id_categoria=$tbl_categoria_id_categoria,
        tbl_cor_id_cor=$tbl_cor_id_cor,img='$img',nome='$nome',qtd=$qtd, preco=$preco, detalhes='$detalhes' where id_roupa=$id_roupa";
        return mysqli_query($conexao, $sql);
    }

    //função excluir
    function excluir_roupa($conexao, $id_roupa){
        $sql= "delete from tbl_roupa where id_roupa= $id_roupa";
        return mysqli_query($conexao, $sql);
    }

    //função listar
    function listar_roupa($conexao){
        $roupas= array();
        $resultado= mysqli_query($conexao, "select*from view_roupa");
        while($roupa= mysqli_fetch_assoc($resultado)){
            array_push($roupas, $roupa);
        }
        return $roupas;
    }

    //função buscar
    function buscar_roupa($conexao, $id_roupa){
        $resultado= mysqli_query($conexao, "select * from view_roupa where id_roupa= $id_roupa");
        return mysqli_fetch_assoc($resultado);
    }

    function pesquisar_roupa($conexao, $roupa){
        $roupas = array();
        $resultado = mysqli_query($conexao, "select * from view_roupa where Nome like '%$roupa%' ");
        while($roupa = mysqli_fetch_assoc($resultado)) {
            array_push ($roupas, $roupa);
        }
        return $roupas;
        }
?>