<?php
if (!isset($_SESSION)) {
      session_start();
      if (!isset($_SESSION['logado']))
      {
        $_SESSION['logado'] = '0';
      }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Questionário Avaliativo - UNIP</title>
<link rel="icon" href="public/imagens/favico.jpg">
<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="public/css/modificado.css">
<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
<!-- Custom styles for this template -->
<link href="public/css/signin.css" rel="stylesheet">

<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/nav.js"></script>
<script type="text/javascript" src="public/js/set_q.js"></script>
<!-- Include Mask plugin -->
<script src="public/js/jquery.mask.min.js"></script>

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="public/js/ie-emulation-modes-warning.js"></script>
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
            <img src="public/imagens/unip.png" class="navbar-brand"/>
          </a>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Início</a></li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="?r=credito">Crédito</a></li>
            <li><a href="?r=faq">FAQ</a></li>
            <?php
              if(!$_SESSION['logado'] == '0')
              {
                echo '<li><a href="?r=quit">Sair</a></li>';
              }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <?php
        if(isset($_REQUEST['r'])){
        	$r = $_REQUEST['r'];
          include 'forms/'.$r.".php";
        }
        else
        {
          
          if ($_SESSION['logado']=='1')
          {
            include 'inicio.php';
          }
          else
          {
            include 'login.php';
          }

          
        }

      ?>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Todos os direitos reservados a Universidade Paulista. <?php echo date('Y');?></p>
      </div>
    </footer>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="public/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>