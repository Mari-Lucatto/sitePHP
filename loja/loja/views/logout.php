<?php
    //iniciar sessão
    session_start();

    //destruir sessão
    session_destroy();

    //voltar para a tela de login
    header("Location: pag_login.php");
?>