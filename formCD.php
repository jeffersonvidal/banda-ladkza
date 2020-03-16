<?
if ($email != "" and $destinatario != "")
{
  $cabecalho = "From: $email\nReply-To: $email";
  $corpo .= "Nome = $nome .\n";
  $corpo .= "Endereço = $endereco .\n";
  $corpo .= "Bairro = $bairro .\n";
  $corpo .= "Cidade = $cidade .\n";
  $corpo .= "UF = $estado .\n";
  $corpo .= "Email = $email .\n\n";
  $corpo .= "Telefone = $telefone .\n\n";
  $corpo .= "Número do Recibo = $recibo .\n\n";
  $corpo .="\n\n=====================================\n";
  $corpo .= "Pedido de CD.\n";
  $corpo .= "========================================";
  mail($destinatario, $assunto, $corpo, $cabecalho);
  echo ("&enviado=ok&");
}
?>