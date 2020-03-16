<?php
	$recipient = "ladkza@ladkza.com.br";
	$subject = "E-mail de Contato do Site!";
	$msg = "Nome: $nome\n\nTelefone: $telefone\n\nEmail: $email\n\nMensagem: $mensagem";
	$mailheaders = "From: $nome";
	mail("$recipient", "$subject", "$msg", "$mailheaders");

?>