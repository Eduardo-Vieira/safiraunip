<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Relatorio</title>
<link rel="icon" href="public/imagens/favico.jpg">
<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="public/css/modificado.css">
<!-- Custom styles for this template -->
<link href="public/css/signin.css" rel="stylesheet">
<link href="public/css/relatorio.css" rel="stylesheet">
</head>

<BODY>


<?php
$nomecurso = "Administração";
$turno = "Matutino";
$campus = "Manaus";
$totalalunos = "10";
$totalperg = '10';
$potencialidade = '95'; // Descobri oque é potencialidade
//$perg_descrição = "1. Missão Institucional – Visão – Valores: Sua clareza, objetividade, coerência, adequação entre todos os seus elementos e com a realidade institucional, a factibilidade e a viabilidade do seu cumprimento integral.";
$pergquant = array('2','2','3','4','6'); //Quantidade de respostas cada questão
$i = '0';  //inteiro pra loop 
$totalperg = '11';
$potencialidade = '0'; // Descobri oque é potencialidade
$i = '0';  //inteiro pra loop 
?>



<div id="rel">
<P><B>RELATÓRIO DE AVALIAÇÃO INSTITUCIONAL INTERNA</P>
<P>Campus <?php echo($campus)?></P>
<BR>
<BR>
<P>2014</P>
<P>ANÁLISE QUANTITATIVA</P>
<P>DISCENTES</P>
<BR>
<BR>
<P>Questionário CPA - Discentes</P>

<TABLE BORDER="1" width = "100%"> 

	<TR> 
		<TD align = "left" position = "50" >Curso:</TD> 
		<TD><?php echo($nomecurso)?></TD>
	</TR>

	<TR>
		<TD align = "left">Turno:</TD> 
		<TD><?php echo($turno)?></TD>
	</TR>

	<TR> 
		<TD align = "left">Campus:</TD>
		<TD><?php echo($campus)?></TD>
	</TR>

	<TR>
		<TD align = "left">Total de Alunos:</TD>
		<TD><?php echo($totalalunos)?></TD>
	</TR>
</TABLE> 


<BR>

<TABLE BORDER="1"  width="100%" valign = "center">
	<TR> 
		<TD  height="50">Manifiste sua opinião a respeito de cada item proposto a seguir</TD>
	</TR>
</TABLE> 

<BR>


<?php
	include 'data/funcoes.php';
	conecta();

	$rst = mysql_query("SELECT * FROM tb_perguntas WHERE perg_form_codid='1' ") or die(mysql_error());
	
	$login_check = mysql_num_rows($rst);

	if ($login_check > 0)
	{
		
		$z= '0';
		while ($linha = mysql_fetch_array($rst, MYSQL_NUM)) 
		{
			$perg_descarray[$z] = $linha[1];
			$z = $z + 1;
		}

		$row = mysql_fetch_assoc($rst);
	}
?>




for ()
<div id="tabelapergunt">
	<P align="left"> <?php echo ($perg_descarray[0]); ?> </P>

	<TABLE BORDER="1" width = "100%">

		<TR> 
			<TD></TD>
			<TD>Percentuais</TD>
			<TD>Quantidade</TD>
			<TD>Análise</TD>
		</TR>

		<TR>  
			<TD align = "left">Bom</TD>
			<TD><?php echo round($pergquant[$i]/($totalperg / 100),2);?>%</TD>
			<TD><?php echo($pergquant[$i]);?></TD>
			<TD rowspan="3"><?php echo($potencialidade);?>%</TD>
		</TR>

		<?php $i = $i + '1';?>

		<TR> 
			<TD align = "left">Otimo</TD>
			<TD><?php echo round($pergquant[$i]/($totalperg / 100),2);?>%</TD>
			<TD><?php echo($pergquant[$i]);?></TD>
		</TR>

		<?php $i = $i + '1';?>

		<TR> 
			<TD align = "left">Regular</TD>
			<TD><?php echo round($pergquant[$i]/($totalperg / 100),2);?>%</TD>
			<TD><?php echo($pergquant[$i]);?></TD>
		</TR>

		<?php $i = $i + '1';?>

		<TR> 
			<TD align = "left">Ruim</TD>
			<TD><?php echo round($pergquant[$i]/($totalperg / 100),2);?>%</TD>
			<TD><?php echo($pergquant[$i]);?></TD>
			<TD rowspan="3"> POTENCIALIDADE</TD>
		</TR>

		<?php $i = $i + '1';?>

		<TR> 
			<TD align = "left">Nãoconheço para opinar</TD>
			<TD><?php echo round($pergquant[$i]/($totalperg / 100),2);?>%</TD>
			<TD><?php echo($pergquant[$i]);?></TD>
		</TR>

			<TR> 
			<TD align = "left">Total</TD>
			<TD>100%</TD>
			<TD><?php echo($totalperg);?></TD>
		</TR>

	</TABLE>
	<BR>
 </div>

<?php $i = '0'; ?>





<?php
$rs01 = mysql_query("SELECT * FROM tb_perguntas WHERE perg_form_codid='1' "); 
while ($row = mysql_fetch_row($rs01)) {

	echo $row[0].'  '.$row[1].'  '.$row[2].'<br>';
	
}





?>





</div>
</BODY>
</HTML>