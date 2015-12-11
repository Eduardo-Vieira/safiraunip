<?php
$body             = '
<body>
	<div style="margin: 0 auto; width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
		<h1>Ol� '.strtoupper($usua_Nome).'</h1>
		<p>A UNIP agradece o seu cadastro no site de avalia��o</p>
		<p>Click no link para ir at� o site <a href="localhost/projetounip/ativacao.php?r='.$token.'">Ativa��o UNIP</a></p>
	</div>
</body>
';

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$body = wordwrap($body, 50);

// Send
mail($usua_email, 'Confirmação de Cadastro UNIP', $body);
