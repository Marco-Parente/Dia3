<!DOCTYPE html>
<html>
<head>
	<title> Formulário Estilizado </title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel = "stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
<?php print_r($_POST)?>
<form method = "post" action ="index7.php">
<input type= "text" name="nome" placeholder = "Qual é seu nome?"><br>
<input type= "email" name="email" placeholder = "Qual é seu email?"><br>
<input type= "text" name="rga" placeholder= "Qual é o seu rga?"><br>
<input type= "text" name="idade" placeholder = "Qual é a sua idade?"><Br>
<input type= "text" name="endereço" placeholder = "Qual é o seu endereço?"><br>
<button type = "submit"> Enviar </button>
</form>
</body>
</html>