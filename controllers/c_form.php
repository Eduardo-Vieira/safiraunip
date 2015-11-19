<?php 
require_once ('../data/config.php');
require_once ('../data/db.php');
//Abrir conexão com banco de dado.
$cnnPDO = new Db();

//Ler dados dos raios selecionados,enviados pelo metodo post
$cont = $_POST['TQ'];
$idpergunt = $_POST['idpergunta'];
$idformular = $_POST['idformulario'];

// gera token rondo
$token = md5(time());
//log pra saber se respondeu
$log = "";


//loop No recebimento $_POST; Se respondido guarda resposta, se não marca dell.
for ($i = 1; $i <= $cont; $i++) {
	//echo "volta ".$i;
	
	if (!isset($_POST['Q'.$i])) {
    	//echo "Essa não Foi respondida.";
    	$idrespota[$i] =$_POST['iddefull'];
    	$log = $log . "Questão ".$i. " Não Respondida Marcado como defull;";
	} 	
	else 
	{
		//echo "Essa Foi respondida.";
		$idrespota[$i] = $_POST['Q'.$i];
	}
}

//log guarda se respondido ou não
if ($log <> ""){
	$log = $log .$token;
	} 
else 
{
$log = "Todas Respondidas;" .$token;
}



$sql ="INSERT INTO `tb_resultados` (`resu_form_codid`,`resu_token`,`resu_resp_codid`,`resu_perg_codid`) VALUES ";

for ($x = 1; $x <= $cont; $x++) { 
	$sql .= "('".$idformular."','".$token."','".$idrespota[$x]."','".$idpergunt."'),";
	$idpergunt++;
} 

//remover a ultima vigula
$sql = substr($sql, 0,strlen($sql)-1);

//Salvar no banco de dados
$cnnPDO->Db()->exec($sql);

//echo "<pre>";
//print_r($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Questionário Avaliativo - UNIP</title>
<link rel="icon" href="public/imagens/favico.jpg">
<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../public/css/modificado.css">

<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
</head>

  <body>
  <!-- Fixed navbar -->
    <nav class="navbar navbar-primary navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  href="/">
            <img src="../public/imagens/unip.png" class="navbar-brand"/>
          </a>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Início</a></li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container" style="margin-top: 30px;">
	<div class="alert alert-success" role="alert">Obrigado por Finalizar a sua pesquisa!</div>
	<a href="../index.php" class="btn btn-success">Concluído</a>
</div>
</body>
</html>
