<?
if ($email != "" and $destinatario != "")
{
  $cabecalho = "From: $email\nReply-To: $email";
  $assunto = "Pedido de CD!";
  $corpo .= "Nome = $nome .\n";
  $corpo .= "Email = $email .\n";
  $corpo .= "Endereco = $endereco .\n";
  $corpo .= "Bairro = $bairro .\n";
  $corpo .= "Cidade = $cidade .\n";
  $corpo .= "Estado = $estado .\n";
  $corpo .= "Cep = $cep .\n";
  $corpo .= "Telefone = $telefone .\n\n";
  $corpo .= "Recibo = $recibo .\n";
  $corpo .="\n\n=====================================\n";
  $corpo .= "Pedido de CD.\n";
  $corpo .= "========================================";
  mail($destinatario, $assunto, $corpo, $cabecalho);
  echo ("&enviado=ok&");
}
?>