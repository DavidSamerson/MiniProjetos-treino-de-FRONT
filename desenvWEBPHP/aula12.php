<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Curso de PHP</title>
</head>
<body>
	<?php 

	$dias = array('Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado');
	$mes = array(
		1=>'Janeiro',
		2=>'Fevereiro',
		3=>'Março',
		4=>'Abril',
		5=>'Maio',
		6=>'Junho',
		7=>'Julio',
		8=>'Agosto',
		9=>'Setembro',
		10=>'Outubro',
		11=>'Novembro',
		12=>'Dezembro'
		);

	echo $dias[date('w')] . " " . date('d') . " De " . $mes[date('n')] . " " . date('Y');		
	?>
</body>
</html>
