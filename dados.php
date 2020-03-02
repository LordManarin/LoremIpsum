<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Contato</title>
    <meta charset="utf-8">
  </head>
  <body>
  <div>
    <?php
   $nome = $_POST["cnome"];
   $telefone = $_POST["cphone"];
   $email = $_POST["cmail"];
   $mensagem = $_POST["cmsg"];
   echo "Obrigado pela mensagem $nome!" 
    ?>    
	<a href="contato.html">voltar</a>
	</div>
  </body>
</html>