<?php 

	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	if ($num1 > $num2) {
		echo "$num1 é maior que a variavel $num2 <br>";
	} else {
		echo "$num2 é maior que a variavel $num1 <br>";
	}

	if ($num1 == $num2) {
		echo "$num1 é igual a variavel $num2 <br>";
	} else {
		echo "$num2 é diferente da variavel $num1 <br>";
	}

?>

<a href="aula7ifelse.php">Voltar</a>