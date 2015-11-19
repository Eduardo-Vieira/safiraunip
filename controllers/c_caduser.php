<?php
//Verificar se foi feito um post.
if (isset($_POST['bntSalvar'])) {

	include 'data/funcoes.php';
	 //Abrir conex? com banco de dado.
	 conecta();

	 //Receber o Post do formul?io
	 $usua_RA		= $_POST["ra"];
	 $usua_Nome		= $_POST["nome"];
	 $usua_Senha	= md5($_POST["senha"]);
	 $usua_email	= $_POST["email"];
     // gera token rondo
	 $token = md5(date("Y/m/d H:i:s"));
	 // Iniciar messagem de erro
	 $msg = 0;
	 
	// INICIO - VALIDAÇÃO DOS CAMPOS
    if ( empty($usua_RA) or empty($usua_Nome) or empty($usua_Senha) or empty($usua_email) )
    {
    ?>
    	<div class="container" style="margin-top: 30px;">
			<div class="alert alert-danger" role="alert">
				<p>Campo requerido em branco. Verifique...</p>
			</div>
			<a href="javascript: history.back();" class="btn btn-success">Voltar</a>
	    </div>
    <?php
       exit;
    }

	 $sql ="INSERT INTO tb_usuario(usua_RA, usua_Nome, usua_Senha, usua_email, usua_ativo, usua_tokenAtv) VALUE ";
	 $sql .="('".$usua_RA."','".$usua_Nome."','".$usua_Senha."','".$usua_email."', 'off','".$token."')";

	 $rs = mysql_query("SELECT * FROM tb_usuario");
	 while ($linha = mysql_fetch_assoc($rs)) {
	 	//Verificar se ja exite na tabela o RA e E-mail
	 	if( $linha['usua_RA'] == $usua_RA || $linha['usua_email'] == $usua_email){
	 		$msg = 1;
	 	}
	 }

	//verificar se o usu?io ja foi cadastrado
	if($msg == 1){
		
?>
	<div class="container" style="margin-top: 30px;">
		<div class="alert alert-danger" role="alert">
			<p> usuário extistente.</p>
		</div>
		<a href="index.php" class="btn btn-success">Concluído</a>
	</div>
<?php

	}
	else
	{	
	 //Salvar no banco de dados
		executar_sql($sql);

		include 'controllers/c_mail.php';

?>
	<div class="container" style="margin-top: 30px;">
	<div class="alert alert-success" role="alert"><p>Obrigado por Finalizar seu Cadastro!</p>
	<p>Entre no seu email <?php echo $usua_email;?> para confirmar o seu cadastro.</p>
	</div>
	<a href="index.php" class="btn btn-success">Concluído</a>
	</div>
<?php
	}
	exit;
}
?>