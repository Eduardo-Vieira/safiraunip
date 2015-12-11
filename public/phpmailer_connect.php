<?php

// using PHPMailer with GMAIL

include("php/phpmailer/class.phpmailer.php");
include("php/phpmailer/class.smtp.php"); // note, this is optional - gets called from main class if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('contents.html'); //corpo do email

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "mx1.hostinger.com.br";      // SMTP server
$mail->Port       = 587;                   // set the SMTP port

$mail->Username   = "no-replay@safiraunip.hol.es";  // username appunipmanaus@gmail.com
$mail->Password   = "8812661234EfS";            // password 33086914

$mail->From       = "";
$mail->FromName   = "Sistema UNIP";
$mail->Subject    = "Confirmação do Cadastro ";
$mail->AltBody    = "texto do corpo"; //Text Body
$mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

$mail->AddReplyTo("no-replay@safiraunip.hol.es","No-Reply"); // e-Mail que envia a confirmação
$mail->AddAddress("no-replay@safiraunip.hol.es","mail"); // quem vai receber o e-Mail de confirmação

$mail->IsHTML(true); // Enviar o HTML

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
}

?>