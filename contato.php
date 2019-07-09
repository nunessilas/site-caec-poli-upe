<?php
if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['mansagem']) && !empty($_POST['mensagem'])){

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

$destino = "caec@ecomp.poli.br";
$identificacao = "Formulario Site CAEC";
$corpo =	"Nome: ".$nome. "\n"
			"Email: ".$email. "\n"
			"Assunto: ".$assunto. "\n"
			"Mensagem: ".$mensagem;

$cabecalho = "From:caec@ecomp.poli.br". "\r\n".
			 "Reply-to".$email."\r\n"
			 ."X-Mailer:PHP/".phpversion();

if(mail($destino, $identificacao, $corpo, $cabecalho)){
	echo ("Email enviado com sucesso!");
}
else {
	# code...
	echo("O email não foi enviado, por favor tente novamente!");
}


}




?>