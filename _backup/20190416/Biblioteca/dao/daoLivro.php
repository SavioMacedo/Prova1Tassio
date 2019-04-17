<?php 

class daoLivro 
{
	// public function BuscaLivro(){
 //        $res = array();
 //        $cmd = $this->Conexao::getInstance()->query("SELECT * FROM tb_livro ORDER BY titulo");
 //        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
 //        return $res;
 //    } 
    public function salvarLivro ($ano, $edicao,$tb_editora_idtb_editora, $tb_categoria_idtb_categoria,$titulo, $upload){
    	echo " chegou na função";
	$cmd = Conexao::getInstance()->prepare("INSERT INTO tb_livro (ano, edicao, tb_editora_idtb_editora, tb_categoria_idtb_categoria,titulo, upload) VALUES (:ano, :edicao, :tb_editora_idtb_editora, :tb_categoria_idtb_categoria, :titulo, :upload) ");
	
	$cmd->bindValue(":ano", $ano);
	$cmd->bindValue(":edicao", $edicao);
	$cmd->bindValue(":tb_editora_idtb_editora", $tb_editora_idtb_editora);
	$cmd->bindValue(":tb_categoria_idtb_categoria", $tb_categoria_idtb_categoria);
	$cmd->bindValue(":titulo", $titulo);
	$cmd->bindValue(":upload", $upload);
	$cmd->execute();
	}
}


 ?>
