<?php
$body             = '
<body>
	<div style="margin: 0 auto; width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
		<h1>Olá '.strtoupper($usua_Nome).'</h1>
		<p>A UNIP agradece o seu cadastro no site de avaliação</p>
		<p>Click no link para ir até o site <a href="safiraunip.hol.es/ativacao.php?r='.$token.'">Ativação UNIP</a></p>
	</div>
</body>
';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$body = wordwrap($body, 50);

// Send
mail($usua_email, 'Confirmação de Cadastro UNIP', $body,$headers );
