<?php
if (!isset($_SESSION)) {
      session_start();
    }
    
$usua_Nome  = $_SESSION['nome'];
$usua_email = $_SESSION['email'];
$token 		= $_SESSION['toke'];

include 'controllers/c_mail.php';
session_destroy();

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

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="public/js/ie-emulation-modes-warning.js"></script>
</head>

  <body>  
    <div class="container" style="margin-top: 30px;">
	<div class="alert alert-success" role="alert"><p>Sua confirmação foi reenviada para o seu email!</p>
	<p>Fique atento ele pode chegar a qual quer momento.</p>
	</div>
	<a href="index.php" class="btn btn-success">Concluído</a>
	</div>

</body>
</html>