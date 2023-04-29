
<li>
	<a href="pag_menu.php">Volte para o Menu Principal</a>
</li>
<?php
    include("../bd/conexao.php");
    include("../controls/roupa.php");
    $id_roupa = $_GET['id'];
    $roupa = buscar_roupa($conexao, $id_roupa);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
<title>Alterar Roupas</title>
</head>

<body>
<div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
<ul>
<h1>Cadastro de Roupas</h1>
<br>
<br>
<div class="mb-3">
<form action="" method="post">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_id">Código</label>
        <input type="number" name="id_roupa" class="form-control" id="exampleFormControlInput1" placeholder="Digite o código" 
        value="<?= $roupa['id_roupa'] ?>" readonly><br>        
</div>

<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_id_tamanho">Identificação do Tamanho</label>
        <select class="form-select" aria-label="Default select example" name="id_tamanho">
        <option value="">Selecione</option>
    <?php
    include("../views/tamanho_lista.php");
$tamanho = listar_tamanho($conexao);
foreach ($tamanho as $t) :
echo "<option value=" . $t['id_tamanho'] . ">" . $t['id_tamanho'] .
"</option>";
endforeach;
?>
</select>
<br>
<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_id_categoria">Identificação da Categoria</label>
        <select class="form-select" aria-label="Default select example" name="id_categoria">
        <option value="">Selecione</option>
<?php
include("../views/categ_lista.php");
$categorias = listar_categoria($conexao);
foreach ($categorias as $c) :
echo "<option value=" . $c['id_categoria'] . ">" .
$c['id_categoria'] . "</option>";
endforeach;
?>
</select>
<br>
<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_id_cor">Identificação da Cor</label>
        <select class="form-select" aria-label="Default select example" name="id_cor">
        <option value="">Selecione</option>
<?php
include("../views/cor_lista.php");
$cor = listar_cor($conexao);
foreach ($cor as $e) :
echo "<option value=" . $e['id_cor'] . ">" . $e['id_cor']
. "</option>";
endforeach;
?>
</select>
<br>

<label for ="lbl_imagem"><img src="../views/img/<?=$roupa['img']?>" alt=""> Imagem</label>
<input type="file" name="txtimg" onchange="loadFile(event)">
<br>
<br> 

<label for="lbl_nome" >Nome da Roupa</label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Digite o Nome da Roupa" 
value="<?= $roupa['nome'] ?>">
<br>

<label for="lbl_qtd">Quantidade</label>
<input type="number" class="form-control" id="exampleFormControlInput1" name="qtd" placeholder="Digite a Quantidade"
value="<?= $roupa['qtd'] ?>">
<br>

<label for="lbl_preco">Preço:</label>
<input type="number" class="form-control" id="exampleFormControlInput1" name="preco" placeholder="Digite o Preço"
value="<?= $roupa['preco'] ?>">
<br>

<label for="lbl_detalhes">Detalhes:</label>
<input type="text" class="form-control" id="exampleFormControlInput1"name="detalhes" placeholder="Digite os Detalhes"
value="<?= $roupa['detalhes'] ?>">
<br>

<div class="content text-center">

        <button type="submit" class="btn btn-secondary">Alterar</button> 
</div>
</form>
<?php
if ($_POST) {

$tbl_tamanho_id_tamanho=$_POST['id_tamanho'];
$tbl_categoria_id_categoria=$_POST['id_categoria'];
$tbl_cor_id_cor=$_POST['id_cor'];
$img=$_POST['txtimg'];
$nome=$_POST['nome'];
$qtd=$_POST['qtd'];
$preco= $_POST['preco'];
$detalhes= $_POST['detalhes'];
if(alterar_roupa($conexao,$tbl_tamanho_id_tamanho, $tbl_categoria_id_categoria, $tbl_cor_id_cor, $img,
 $nome, $preco, $qtd, $detalhes,$id_roupa))
{
echo ("Alterado com sucesso");

} else {
$msg = mysqli_error($conexao);
echo ($msg);
}
}
?>
</div>
</ul>  
        </p>
      </div>
</body>
</html>