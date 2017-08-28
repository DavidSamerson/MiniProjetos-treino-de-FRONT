<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
</head>
<body>
<section>

	<?php 
		
		$num = $_POST["numero"];

		for($i = 0; $i <= 10; $i ++){

			echo "$num X $i = " . ($num * $i) . "<br>";

		}

	?>

</section>
</body>
</html>
