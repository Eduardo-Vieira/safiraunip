<?php
if (!isset($_SESSION)) {
      session_start();
      if (!empty($_SESSION['logado']))
      	return header('location: inicio.php');
      {
        $_SESSION['logado'] = '0';
        return header('location: index.php');

      }
    }
?>



<div class="page-header">
    <h2>Seja bem vindo, <?php echo strtoupper($_SESSION['nome']);?>.</h2>
</div>
<!-- linha 01 -->
<div class="row">
	<?php
	
	?>

	 <!-- Coluna 01 -->
  <div class="col-sm-6 col-md-4">
	  <div class="panel panel-primary" style="height: 220px;">
	  <!-- Default panel contents -->
	  <div class="panel-heading"><b>01</b></div>
	  <div class="panel-body">
	    <p>QUESTIONÁRIO DE AVALIAÇÃO INSTITUCIONAL INTERNA DESTINADO AOS DIRETORES DE CAMPUS, CHEFIA DE CAMPUS, COORDENADORES DE CURSO – 2015</p>
	  	<nav>
		  <ul class="pager pager-man pager pager-man-man">
		    <li class="next"><a href="?r=frm01">Continuar <span aria-hidden="true">&rarr;</span></a></li>
		  </ul>
		</nav>
	  </div>

	</div>
  </div>
  <?php
		
  ?>
  <!-- Coluna 02 -->
  <div class="col-sm-6 col-md-4">
	  <div class="panel panel-primary" style="height: 220px;">
	  <!-- Default panel contents -->
	  <div class="panel-heading"><b>02</b></div>
	  <div class="panel-body">
	    <p>QUESTIONÁRIO DE AVALIAÇÃO INSTITUCIONAL INTERNA DESTINADO AO CORPO DISCENTE E AOS EGRESSOS - 2015</p>
	    <nav>
		  <ul class="pager pager-man pager pager-man-man">
		    <li class="next"><a href="?r=frm02">Continuar <span aria-hidden="true">&rarr;</span></a></li>
		  </ul>
		</nav>
	  </div>

	</div>
  </div>
  <!-- Coluna 03 -->
  <div class="col-sm-6 col-md-4">
	  <div class="panel panel-primary" style="height: 220px;">
	  <!-- Default panel contents -->
	  <div class="panel-heading"><b>03</b></div>
	  <div class="panel-body">
	    <p>QUESTIONÁRIO DE AVALIAÇÃO INSTITUCIONAL INTERNA DESTINADO AO CORPO DOCENTE - 2015</p>
	    <nav>
		  <ul class="pager pager-man pager pager-man-man">
		    <li class="next"><a href="?r=frm03">Continuar <span aria-hidden="true">&rarr;</span></a></li>
		  </ul>
		</nav>
	  </div>

	</div>
  </div>
</div>
<!-- linha 02 -->
<div class="row">
  <!-- Coluna 04 -->
  <div class="col-sm-6 col-md-4">
	  <div class="panel panel-primary" style="height: 220px;">
	  <!-- Default panel contents -->
	  <div class="panel-heading"><b>04</b></div>
	  <div class="panel-body">
	    <p>QUESTIONÁRIO DE AVALIAÇÃO INSTITUCIONAL INTERNA DESTINADO À SOCIEDADE CIVIL - 2015</p>
	    <nav>
		  <ul class="pager pager-man">
		    <li class="next"><a href="?r=frm04">Continuar <span aria-hidden="true">&rarr;</span></a></li>
		  </ul>
		</nav>
	  </div>

	</div>
  </div>

    <!-- Coluna 05 -->
  <div class="col-sm-6 col-md-4">
	  <div class="panel panel-primary" style="height: 220px;">
	  <!-- Default panel contents -->
	  <div class="panel-heading"><b>05</b></div>
	  <div class="panel-body">
	    <p>QUESTIONÁRIO DE AVALIAÇÃO INSTITUCIONAL INTERNA DESTINADO AO CORPO TÉCNICO-ADMINISTRATIVO - 2015</p>
	    <nav>
		  <ul class="pager pager-man">
		    <li class="next"><a href="?r=frm05">Continuar <span aria-hidden="true">&rarr;</span></a></li>
		  </ul>
		</nav>
	  </div>

	</div>
  </div>

</div>
  </div>

</div>

    ?>