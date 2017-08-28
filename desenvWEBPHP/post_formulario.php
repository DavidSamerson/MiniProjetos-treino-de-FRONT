<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
</head>
<body>
	<HEADER></HEADER>
	<section>
	<form method="post" action="">

		<input type="text" name="nome" id="nome" placeholder="Digite seu nome" required="true" autofocus="true">
		<input type="submit" name="enviar" value="enviar">

	</form>
	</section>
	<footer>
		<?php 
			$nome = isset ($_POST["nome"])?$_POST["nome"]:"";
			echo $nome;
		?>
	</footer>
</body>
</html>
