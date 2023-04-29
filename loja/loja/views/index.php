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
    <title>Início</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
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
    <!-- Banner Image  -->
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    >
      <div class="content text-center">
        <h1 class="text-white">Loja de Roupas</h1>
      </div>
    </div>

    <!-- Main Content Area -->
    <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
        <br><h2>Seja bem-vindo(a)!! Selecione a pessoa que você é abaixo: </h2><br>

<ul>
<a class="nav-link" href="pag_login.php">Administrador</a>
<a class="nav-link" href="LocaImgs.php">Usuário</a>
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
</body>
</html>
