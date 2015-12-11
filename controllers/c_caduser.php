<?php
    require_once ('data/config.php');	
    require_once ('data/db.php');
    //Abrir conexão com banco de dado.
    $cnnPDO = new Db();
        
//Verificar se foi feito um post.
if (isset($_POST['bntSalvar'])) {
            
        //Receber o Post do formul?io
	 $usua_RA	= $_POST["ra"];
	 $usua_Nome	= $_POST["nome"];
	 $usua_Senha	= md5($_POST["senha"]);
	 $usua_email	= $_POST["email"];
	 $usua_cNivel	= $_POST["nivel"];
	 $usua_cCurso	= $_POST["curso"];
	 $usua_cTurno	= $_POST["turno"];
         $usua_cCidade  = $_POST["cidade"];
         
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

	 $sql ="INSERT INTO tb_usuario(usua_RA, usua_Nome, usua_Senha, usua_email, usua_ativo, usua_tokenAtv, usua_cNivel, usua_cCurso, usua_cTurno, usua_cCidade) VALUE ";
	 $sql .="('".$usua_RA."','".$usua_Nome."','".$usua_Senha."','".$usua_email."', 'off','".$token."','".$usua_cNivel."','".$usua_cCurso."','".$usua_cTurno."','".$usua_cCidade."')";

	 $rs = $cnnPDO->Db()->query("SELECT * FROM tb_usuario");
         $n_linhas = $rs->rowCount();
         $row = $rs->fetchAll();
         for($i=0;$i <$n_linhas;$i++){
            //Verificar se ja exite na tabela o RA e E-mail
             if($row[$i]['usua_RA']== $usua_RA ||$row[$i]['usua_email']== $usua_email){
              $msg = 1;   
             }
         }
	//verificar se o usuáio ja foi cadastrado
	if($msg == 1){
		
?>
	<div class="container" style="margin-top: 30px;">
		<div class="alert alert-danger" role="alert">
			<p> Usuário extistente.</p>
		</div>
		<a href="javascript: history.back();" class="btn btn-success">Voltar</a>
	</div>
<?php

	}
	else
	{	
	 //Salvar no banco de dados
	$cnnPDO->Db()->exec($sql);
       

	//include 'controllers/c_mail.php';

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