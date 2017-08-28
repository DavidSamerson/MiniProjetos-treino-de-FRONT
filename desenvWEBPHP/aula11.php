<?php 

$nome = isset($_POST["nome"])?$_POST["nome"]:"";
$email = isset($_POST["email"])?$_POST["email"]:"";
$telefone = isset($_POST["telefone"])?$_POST["telefone"]:"";
$mensagem = isset($_POST["mensagem"])?$_POST["mensagem"]:"";


$destino = "samerson10@gmail.com";
$assunto = "Contato Pelo Site Teste";
$corpo = "<strong>Mensagem de cliente</strong>";
$corpo .= "<br> Nome: $nome <br>";
$corpo .= "<br> Email: $email <br>";
$corpo .= "<br> Telefone: $telefone <br>";
$corpo .= "<br> Mensagem: <br> $mensagem <br>";

$header = "Content-Type: text/html; charset= utf-8\n";
$header .= "From: $email Reply-to: $email\n";

mail($destino,$assunto,$corpo,$header);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
</head>
<body>
	<form method="post" action="">
		Nome: <br><input type="text" name="nome" class="campo" required autofocus><br><br>
		E-MAIL: <br><input type="email" name="email" class="campo" required ><br><br>
		Telefone: <br><input type="tel" name="telefone" class="campo" required ><br><br>
		Mensagem: <br><textarea name="mensagem"></textarea><br><br>
		<input type="submit" name="enviar" class="campo" value="enviar" ><br><br>
	</form>
</body>
</html>
