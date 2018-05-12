<!DOCTYPE html>
<html>

<head>
	<title>Aula de PHP</title>
</head>

<body>

	<?php
	$i = array(
	//chave        //valor
	"primeiro" => 'podskda',
	0          => 'valor 2'
	);
	
	?>
	
	
	<?php
	$vetor = [
	//chave        //valor
	0 => '1',
	'dois'          => '2'
	];
	print_r($vetor);
	print_r("<br>");
	print_r("<br>");
	print_r($GLOBALS);
	print_r("<br>");
	
	foreach ($vetor as $chave => $valor){
		echo "<br>"."   |chave: $chave  \/ ".$chave.'|   Valor '.$valor.',    \/';
		//Sorry, não entendi o que aconteceu aqui
	}
	?>
</body>

</html>