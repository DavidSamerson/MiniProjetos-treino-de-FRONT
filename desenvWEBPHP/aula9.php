<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
</head>
<body>
	<section>
		<form action="" method="post">

			<select name="opcao">
				<option value="1">Praia 1</option>
				<option value="2">Praia 2</option>
				<option value="3">Praia 3</option>
			</select><br><br>

			<input type="submit" name="enviar" value="enviar">
		</form>
		<?php

	$opcao = isset($_POST["opcao"])? $_POST["opcao"]:"";

	switch($opcao) {

		case 1:
		echo "<h1>PRAIA 1</h1>";
		echo "<img src=''>";
		break;

		case 2:
		echo "<h1>PRAIA 2</h1>";
		echo "<img src=''>";
		break;

		case 3:
		echo "<h1>PRAIA 3</h1>";
		echo "<img src=''>";
		break;
	}

	?>
	</section>

</body>
</html>
