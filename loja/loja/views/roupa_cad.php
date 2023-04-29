<?php
 include("../bd/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
<title>Cadastro de Roupas</title>
<script>
        function loadFile(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</head>
<body>

<br>
<div class="content text-center">
  <h1 >Cadastro de Roupas</h1>
    </div>
  <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
<ul>
<div class="container">
        <div class="preview-img" >
           
            <img id="output" width="100" />
        </div>

<form action="" method="post" enctype="multipart/form-data">
<label for="">Selecione</label>
<input type="file" class="form-control" name="txtimg[]" onchange="loadFile(event)">
<br>
<form action="" method="post">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" name="lbl_id_tamanho">Identificação do Tamanho</label>
<select class="form-select" aria-label="Default select example" name="id_tamanho" >
<option value="">Selecione</option> 

<?php
include("../views/tamanho_lista.php");
$tamanho=listar_tamanho($conexao);
foreach ($tamanho as $t) :
echo "<option value=".$t['id_tamanho'].">". $t['id_tamanho']
."</option>";
endforeach;
?>

</select>
<br>
<label name="lbl_id_categoria">Identificação da Categoria</label>
<select class="form-select" aria-label="Default select example" name="id_categoria"  >
<option value="">Selecione</option>

<?php
include("../views/categ_lista.php");
$categoria=listar_categoria($conexao);
foreach ($categoria as $c) :
echo "<option value=".$c['id_categoria'].">". $c['id_categoria']
."</option>";
endforeach;
?>

</select>
<br>
<label name="lbl_id_cor">Identificação da Cor</label>
<select class="form-select" aria-label="Default select example" name="id_cor">
<option value="">Selecione</option>

<?php
include("../views/cor_lista.php");
$cores=listar_cor($conexao);
foreach ($cores as $e) :
echo "<option value=".$e['id_cor'].">". $e['id_cor']
."</option>";
endforeach;
?>
</select>
<br>
<label for="lbl_nome" for="exampleFormControlInput1" class="form-label">Nome da Roupa </label>
<input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Digite o Nome da Roupa">
<br>
<label for="id_quantidade">Quantidade</label>
<input type="text" class="form-control" id="exampleFormControlInput1" type="number" name="qtd" 
placeholder="Digite a quantidade">
<br>
<label for="lbl_preco">Preço:</label>
<input type="text" class="form-control" id="exampleFormControlInput1" type="number" name="preco"
placeholder="Digite o Preço">
<br>
<label for="lbl_detalhes">Detalhes:</label>
<input type="text" class="form-control" id="exampleFormControlInput1" type="text" name="detalhes" 
placeholder="Digite os Detalhes">
<br>
<div class="content text-center">
        <button type="submit" class="btn btn-secondary">Cadastrar</button> 
</div>
    </form>
</form>
</ul>  
        </p>
      </div>
<?php
 include("../bd/conexao.php");
 include("../controls/roupa.php");

if($_POST)
{
    $tbl_tamanho_id_tamanho= $_POST['id_tamanho'];

    $tbl_categoria_id_categoria= $_POST['id_categoria'];

    $tbl_cor_id_cor= $_POST['id_cor'];
    
    foreach ($_FILES["txtimg"] ["error"]as $key => $valor) {
        if($valor == UPLOAD_ERR_OK){
            $temp=$_FILES['txtimg']['tmp_name'][$key];
            $img=$_FILES['txtimg']['name'][$key];
            move_uploaded_file($temp, "../views/img/$img");
        }
    }

    $nome= $_POST['nome'];

    $qtd= $_POST['qtd'];

    $preco= $_POST['preco'];

    $detalhes= $_POST['detalhes'];

    if(inserir_roupa($conexao,$tbl_tamanho_id_tamanho, $tbl_categoria_id_categoria,
    $tbl_cor_id_cor,$img, $nome, $qtd,$preco,$detalhes)){
        


        echo("Cadastrado com sucesso");
    }else{
        $msg=mysqli_error($conexao);
        echo($msg);
    }
}
if ($_POST) {  

            
                 
        }
?>
</body>
</html>
