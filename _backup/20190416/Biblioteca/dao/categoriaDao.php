<?php 
require_once 'db/Conexao.php';
require_once "view/template.php";
require_once "modelo/categoria.php";

	class categoriaDao{

		public function buscaCategoria(){
			$cmd = Conexao::getInstance()->prepare("SELECT idtb_categoria, nomeCategoria from tb_categoria");	
			$cmd->execute();
			$categorias =[];
			// fetchAll(PDO::FETCH_ASSOC)
			while ( $rs = $cmd->fetch(PDO::FETCH_OBJ)) {
				$categoria = new Categoria();
				$categoria->setIdCategoria($rs->idtb_categoria);
				$categoria->setNomeCategoria($rs->nomeCategoria);
				array_push($categorias, $categoria);
			}
			return $categorias;
			}
	}
 ?>