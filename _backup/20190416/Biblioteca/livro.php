<?php

require_once "view/template.php";
require_once "dao/daoLivro.php";
require_once "modelo/livro.php";
require_once "db/Conexao.php";
require_once "dao/categoriaDao.php";

$daol = new daoLivro();
$catg = new categoriaDao(); 
$buscaCategoria=$catg->buscaCategoria();

print_r($buscaCategoria);

template::header();
template::sidebar();
template::mainpanel();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$ano 					 = $_POST['ano'];
	$titulo 				 = $_POST['titulo'];
	$isbn 					 = $_POST['isbn'];
	$edicao 				 = $_POST['edicao'];
	$upload 				 = $_POST['upload'];
	$tb_editora_idtb_editora = $_POST['tb_editora_idtb_editora'];
	$tb_categoria_idtb_categoria = $_POST['tb_categoria_idtb_categoria'];

	$daol->salvarLivro($ano, $edicao,$tb_editora_idtb_editora, $tb_categoria_idtb_categoria,  $titulo, $upload);
	
}
?>
<div class="col-md-12">
	<div class="col-md-1"></div>
	<form class="form-horizontal col-md-11" action="" method="POST">
		<div class="form-group ">
		    <label class="col-md-2 col-form-label">Título:</label>
		    <div class="col-md-10">
		      <input type="text" name="titulo" class="form-control-plaintext" id="Título" >
		    </div>
  		</div>
  		<div class="form-group">
		    <label class="col-md-2 col-form-label">Ano:</label>
		    <div class="col-md-10">
		      <input type="text" name="ano" class="form-control-plaintext" id="ano" >
		    </div>
  		</div>
  		<div class="form-group">
		    <label class="col-md-2 col-form-label">Edição:</label>
		    <div class="col-md-10">
		      <input type="text" name="edicao" class="form-control-plaintext" id="edicao" >
		    </div>
  		</div>
  		<div class="form-group">
		    <label class="col-md-2 col-form-label">isbn:</label>
		    <div class="col-md-10">
		      <input type="text" name="isbn" class="form-control-plaintext" id="isbn" >
		    </div>
  		</div>
  		<div class="form-group">
		    <label class="col-md-2 col-form-label">upload:</label>
		    <div class="col-md-10">
		      <input type="text" name="upload" class="form-control-plaintext" id="upload" >
		    </div>
  		</div>
  		<div class="form-group">
		    <label class="col-md-2 col-form-label">idtb_editora:</label>
		    <div class="col-md-10">
		      <input type="text" name="tb_editora_idtb_editora" class="form-control-plaintext" id="tb_editora_idtb_editora" >
		    </div>
  		</div>
  		<div class="form-group">
		    <label class="col-md-2 col-form-label">idtb_categoria:</label>
		    <div class="col-md-10">
		      <select>
		    		<?php foreach ($buscaCategoria as $cat) {?>
		    			<option value="<?= $cat->getIdCategoria()?>"><?= $cat->getNomeCategoria()?></option>
		    		<?php } ?>
		    	</select>	
		    </div>
  		</div>
  		<div class="form-group col-md-12">
  			<div class="col-md-2">
  				 <button type="submit" class="btn btn-primary">Cadastrar</button>
  			</div>
  		</div>
	</form>
</div>