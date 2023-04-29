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
    <title>Lista de Roupas</title>
</head>
<body>
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

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="pag_menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="logout.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    >
      <div class="content text-center">
        <h1 class="text-white">PRODUTOS</h1>
      </div>
    </div>
<div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
  <form action="" method="POST">
    <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="text" name="pesq" placeholder="Digite o nome da roupa" aria-label="Search"><br>
      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      <?php
            include("../bd/conexao.php");
            include("../controls/roupa.php");
    
                if($_POST)
                {
                $roupa=$_POST['pesq'];
                $roupas = pesquisar_roupa($conexao, $roupa);
            }
          else
          {
        
            $roupas = listar_roupa($conexao);
        } 
                foreach ($roupas as $roupa) :   
                
        ?>
    </form>
                </form>
  </div>
</ul>  
        </p>
      </div>
      <div class="p-5 border">
        <p>
<ul>
        <ul>
        <div class="container">
    <div class="row">
    
         <div class="col-md-3">
        <div class="card" style="width: 20rem;">
        <img class="img-fluid" style="margin-left:70px; margin-top:13px;"src="../views/img/<?=$roupa['imagem']?>"alt="" height='180' width='180'>
        <div class="card-body">
        
        <div class="card" style="width: 18rem;">
  <div class="card-header"><?=$roupa['nome']?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" class="img"> Nome da Imagem: <?=$roupa['imagem']?></li>
    <li class="list-group-item" class="id_roupa"> Identificação da roupa: <?=$roupa['id_roupa'] ?></li>
    <li class="list-group-item" class="id_tamanho">Tamanho: <?=$roupa['tamanho']?></li>
    <li class="list-group-item" class="id_cor"> Cor: <?=$roupa['cor']?></li>
    <li class="list-group-item" class="id_categoria">Categoria: <?=$roupa['categoria']?></li>
    <li class="list-group-item" class="qtd">Quantidade: <?=$roupa['quantidade']?></li>
    <li class="list-group-item" class="preco">Preço: <?=$roupa['preço']?></li>
    <li class="list-group-item" class="detalhes">Detalhes: <?=$roupa['detalhes']?></li>
  </ul>
</div>   
            </div>
            </div>
            </div> 
    </div><br>
    <?php endforeach; ?>
        </ul>
    </li>
</ul>  
        </p>
      </div>
</body>
</html>