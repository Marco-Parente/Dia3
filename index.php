<!DOCTYPE html>
<html>

<head>
	<title>Página html qualquer</title>
</head>

<body>
<h1>
	<?php
	echo "Hello World!";
	echo "<br>";
	$primeiro = 25;
	$segundo = 75;
	
	if($primeiro == $segundo){
		echo "As variáveis são iguais";
	}else{
		echo "As váriáveis são diferentes";
	}
	?>
</h1>
</body>

</html>