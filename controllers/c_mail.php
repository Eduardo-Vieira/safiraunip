<?php
// using PHPMailer with GMAIL

include("public/php/phpmailer/class.phpmailer.php");
include("public/php/phpmailer/class.smtp.php"); // note, this is optional - gets called from main class if not already loaded

$mail             = new PHPMailer();

//corpo do email
$body             = '
<body>
	<div style="margin: 0 auto; width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
		<h1>Ol� '.strtoupper($usua_Nome).'</h1>
		<p>A UNIP agradece o seu cadastro no site de avalia��o</p>
		<p>Click no link para ir at� o site <a href="localhost/projetounip/ativacao.php?r='.$token.'">Ativa��o UNIP</a></p>
	</div>
</body>
';


$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port

$mail->Username   = "gceduvieira@gmail.com";  // GMAIL username
$mail->Password   = "edu@31416";            // GMAIL password

$mail->From       = "";
$mail->FromName   = "Sistema UNIP";
$mail->Subject    = "Confirma��o de Cadastro UNIP";
$mail->AltBody    = "confirma��o da conta"; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

$mail->AddReplyTo("gceduvieira@gmail.com","No-Reply"); // e-Mail que envia a confirmação
$mail->AddAddress($usua_email,"mail"); // quem vai receber o e-Mail de confirmação

$mail->IsHTML(true); // Enviar o HTML

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} 