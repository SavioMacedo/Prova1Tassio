<?php
/**
 * Created by PhpStorm.
 * User: avaliacao
 * Date: 16/03/2018
 * Time: 21:16
 */

include_once "estrutura/Template.php";
require_once "db/avaliacaoDAO.php";
require_once "classes/avaliacao.php";

$template = new Template();
$object = new avaliacaoDAO();

$template->header();
$template->sidebar();
$template->navbar();


// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
    $matricula = (isset($_POST["matricula"]) && $_POST["matricula"] != null) ? $_POST["matricula"] : "";
    $nota1 = (isset($_POST["nota1"]) && $_POST["nota1"] != null) ? $_POST["nota1"] : "";
    $nota2 = (isset($_POST["nota2"]) && $_POST["nota2"] != null) ? $_POST["nota2"] : "";
    $notafinal = (isset($_POST["notafinal"]) && $_POST["notafinal"] != null) ? $_POST["notafinal"] : "";
    $situacao = (isset($_POST["situacao"]) && $_POST["situacao"] != null) ? $_POST["situacao"] : "";
} else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $id
    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
    $nota1 = NULL;
    $nota2 = NULL;
    $notafinal = NULL;
    $matricula = NULL;
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != "") {

    $avaliacao = new Avaliacao($id, $matricula, '', '', '');

    $resultado = $object->atualizar($avaliacao);
    $nota1 = $resultado->getNota1();
    $nota2 = $resultado->getNota2();
    $notafinal = $resultado->getNotafinal();
    $situacao = $resultado->getSituacao();
    $matricula = $resultado->getMatricula();
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $id != "" && $matricula != "" && $nota1 !="" && $nota2 != "") {
    $avaliacao = new avaliacao($id, $matricula, $nota1, $nota2, $notafinal, $situacao);
    $msg = $object->salvar($avaliacao);
    $id = null;
    $nota1 = null;
    $nota2 = null;
    $notafinal = null;
    $situacao = null;
    $matricula = null;
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
    $avaliacao = new avaliacao($id, $matricula, '', '', '');
    $msg = $object->remover($avaliacao);
    $id = null;
}

?>

<div class='content' xmlns="http://www.w3.org/1999/html">
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='card'>
                    <div class='header'>
                        <h4 class='title'>avaliacao</h4>
                        <p class='category'>Lista de avaliacaos do sistema</p>

                    </div>
                    <div class='content table-responsive'>

                        <form action="?act=save&id=" method="POST" name="form1">
                            <hr>
                            <i class="ti-save"></i>
                            <input type="hidden" name="id" value="<?php
                            // Preenche o id no campo id com um valor "value"
                            echo (isset($id) && ($id != null || $id != "")) ? $id : '';
                            ?>"/>
                            Matricula:
                            <input type="text" size="50" name="matricula" value="<?php
                            // Preenche o nome no campo nome com um valor "value"
                            echo (isset($matricula) && ($matricula != null || $matricula != "")) ? $matricula : '';
                            ?>"/>
                            Nota1:
                            <input type="number" size="7" name="nota1" value="<?php
                            // Preenche o sigla no campo sigla com um valor "value"
                            echo (isset($nota1) && ($nota1 != null || $nota1 != "")) ? $nota1 : '';
                            ?>"/>
                            Nota2:
                            <input type="number" size="7" name="nota2" value="<?php
                            // Preenche o sigla no campo sigla com um valor "value"
                            echo (isset($nota2) && ($nota2 != null || $nota2 != "")) ? $nota2 : '';
                            ?>"/>
                            NotaFinal:
                            <input type="number" size="7" name="notafinal" value="<?php
                            // Preenche o sigla no campo sigla com um valor "value"
                            echo (isset($notafinal) && ($notafinal != null || $notafinal != "")) ? $notafinal : '';
                            ?>"/>
                            <input type="submit" VALUE="Cadastrar"/>
                            <hr>
                        </form>


                        <?php

                        echo (isset($msg) && ($msg != null || $msg != "")) ? $msg : '';

                        //chamada a paginação
                        $object->tabelapaginada();

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$template->footer();
?>
