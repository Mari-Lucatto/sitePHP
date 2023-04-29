<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <style>
      .banner-image {
        background-image: url('img/banner-img.jpg');
        background-size: cover;
      }
    </style>
    <title>Login</title>
</head>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="index.php">Loja de Roupas</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center">
        <h1 class="text-white">Página de Login</h1>
      </div>
    </div>
<body>
    <center>
        <br>
        <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
<ul>
<form action="" method="POST">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Administrador</label>
                <div class="col-sm-10">
                    <input type="text" name="txtu" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" name="txts" class="form-control" id="inputPassword">
                </div>
            </div>
            <input type="submit" class="btn btn-secondary" value="LOGAR">
        </form>
</ul>  
      </div>
    </div>
        <?php
        include("../bd/conexao.php");
        include("../controls/banco-adm.php");

        if ($_POST) {
            $login = $_POST['txtu'];
            $senha = $_POST['txts'];
            if (efetuarLogin($conexao, $login, $senha)) {
                session_start();
                $_SESSION['nome'] = $login;
                $_SESSION['log'] = 'ativo';
                header("Location: pag_menu.php");
                die();
            } else {
                echo ("Usuário não encontrado");
            }
        }
        ?>
    </center>
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
</body>
</html>