<?php 

	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	if ($num1 >= 10 or  $num2 >= 10) {
		$msg = "Acesso permitido <br>";
		include_once("aula7ifelse.php");
	} else {
		$msg = "Acesso não permitido <br>";
	}

echo "$msg";

?>


<a href="aula7ifelse.php">Voltar</a>