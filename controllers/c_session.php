<?php

	if (isset($_POST['Submit']))
	{
		include 'data/funcoes.php';
		//Abrir conex? com banco de dado.
		conecta();
		
		$usua_email	= $_POST["email"];
		$usua_Senha	= md5($_POST["senha"]);

		$rs = mysql_query("SELECT * FROM tb_usuario WHERE usua_email='$usua_email' AND usua_Senha='$usua_Senha'");
		
		$login_check = mysql_num_rows($rs);

		if ($login_check > 0)
		{
			$row = mysql_fetch_assoc($rs);

			if($row['usua_ativo']=='on'){
				
				$_SESSION['usuario_id'] = $row['usua_ID'];
				$_SESSION['RA'] = $row['usua_RA'];
				$_SESSION['nome'] = $row['usua_Nome'];
				$_SESSION['email'] = $row['usua_email'];
				$_SESSION['logado'] = '1';
				
			//$_SESSION['nivel_usuario'] = $row['nivel_usuario'];
		    //$sql ="UPDATE tb_usuario SET data_ultimo_login = now() WHERE usuario_id ='{$usuario_id}'"
			//executar_sql($sql)

				header("Location: index.php");
			}
			else
			{
				//Dados para o reenvio do email
				$_SESSION['nome'] = $row['usua_Nome'];
				$_SESSION['email'] = $row['usua_email'];
				$_SESSION['toke'] = $row['usua_tokenAtv'];
				
			?>
				<div class="container" style="margin-top: 30px;">
				<div class="alert alert-danger" role="alert">
				<p>Email de confimação de conta foi enviado para: <?php echo $_SESSION['email']; ?> <br />
				Valide sua conta entre novamente. </p>
				<p>Caso queira reenviar o e-mail <a href="reenviar.php">click aqui</a></p>
				</div>
				<a href="index.php" class="btn btn-success">Voltar</a>
				</div>
		    <?php
		    	exit;
			}
			

		}
		else
		{
		?>
			<div class="container" style="margin-top: 30px;">
			<div class="alert alert-danger" role="alert">
			<p>Voc&ecirc; n&atilde;o pode logar-se! Este usu&aacute;rio ou senha n&atilde;o s&atilde;o v&aacute;lidos!<br />
			Por favor tente novamente!</p>
			</div>
			<a href="index.php" class="btn btn-success">Voltar</a>
			</div>
		<?php
			session_destroy();
			exit;
		}
	}
?>	