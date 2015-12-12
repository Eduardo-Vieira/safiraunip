<?php
	$r = $_REQUEST['r'];

    require_once ('data/config.php');	
    require_once ('data/db.php');
    //Abrir conexão com banco de dado.
    $cnnPDO = new Db();
    $sql = "UPDATE `tb_usuario` SET `usua_ativo`='on' WHERE `usua_tokenAtv`='".$r."'";
    $rs = $cnnPDO->Db()->exec($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Questionário Avaliativo - UNIP</title>
<link rel="icon" href="public/imagens/favico.jpg">
<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="public/css/modificado.css">
<!-- Custom styles for this template -->
<link href="public/css/signin.css" rel="stylesheet">

<script type="text/javascript" src="public/js/bootstrap.min.js"></script>

<!-- Include Mask plugin -->
<script src="public/js/jquery.mask.min.js"></script>

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="public/js/ie-emulation-modes-warning.js"></script>
</head>

  <body>  
    <div class="container" style="margin-top: 30px;">
	<div class="alert alert-success" role="alert"><p>Obrigado por Confirmar o seu Cadastro!</p>
	<p>Seu Usuário já está Ativo.</p>
	</div>
	<a href="index.php" class="btn btn-success">Concluído</a>
	</div>

</body>
</html>