<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">

    <title>Tela de menu</title>
    <style>
      .banner-image {
        background-image: url('img/banner-img.jpg');
        background-size: cover;
      }
      .link-secondary {
        text-decoration: none;
      }
    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#">Loja de Roupas</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="logout.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Banner Image  -->
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    </div>

    <!-- Main Content Area -->
    <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<?php
    session_start();
    if($_SESSION['log'] != 'ativo')
    {
        session_destroy();
        header("Location: pag_login.php");
    }
    echo "Olá, <b>" . $_SESSION['nome'].
         "</b>. Bem-vindo(a) ao sistema! ";
?>
</ul>  
        </p>
      </div>
      <div class="p-5 border">
        <p>
<ul>
        <ul>
            <h3><b>Ferramentas de Cadastro</b></h3><br>
                <a href="categ_cad.php" class="link-secondary">Cadastro de Categoria das Roupas</a><br>
                <a href="cor_cad.php" class="link-secondary">Cadastro de Cores das Roupas</a><br>
                <a href="tamanho_cad.php" class="link-secondary">Cadastro de Tamanhos das Roupas</a><br>
                <a href="roupa_cad.php" class="link-secondary">Cadastro de Roupas</a><br>
            <?php
                $_SESSION['verifica'] = 'ativo';
            ?>
        </ul>
    </li>
</ul>  
        </p>
      </div>
      <div class="p-5 border">
        <p>
<ul>
        <ul>
        <h3><b>Ferramentas de Gerenciamento</b></h3><br>
                <a href="categ_lista.php" class="link-secondary">Lista de Categorias</a><br>
                <a href="cor_lista.php" class="link-secondary">Lista de Cores</a><br>
                <a href="tamanho_lista.php" class="link-secondary">Lista de Tamanhos</a><br>
                <a href="roupa_lista.php" class="link-secondary">Lista de Roupas</a><br>
                <a href="LocaImgs.php" class="link-secondary">Catálogo de Produtos</a><br>
</ul>  
        </p>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
            <?php
                $_SESSION['verifica'] = 'ativo';
                die();
            ?>
        </ul>
    </li>
</body>
</html>