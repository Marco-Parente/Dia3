<?php 
$host = "localhost";
$banco = "formulario1";
$usuario = "root";
$senha = "";
$table = "formulario1";

$nome = $_POST['nome'];
$email = $_POST['email'];
$rga = $_POST['rga'];
$idade = $_POST['idade'];
$endereco = $_POST['endereço'];

$conexao = mysqli_connect($host, $usuario, $senha, $table);

if(!$conexao){
	die();
	echo "Erro de conexao";
}

mysqli_select_db($conexao, $banco);

$sql ="INSERT INTO " . $table  . " VALUES (NULL ,'$nome', '$email', '$idade', '$endereco', '$rga')";

$resultado = mysqli_query($conexao, $sql);

echo mysqli_error($conexao);
print_r($resultado);

mysqli_close($conexao);
?>

<html>
<head>
	<title>Tabela Estilizada</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel = "stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>

<div class = "container">
	<div class = "row">
		<?php if ($_POST): ?>
			<ul>
				<li> Meu nome é: <?php echo $_POST['nome']?></li>
				<li> Meu email é: <?php echo $_POST['email']?></li>
				<li> Meu rga é: <?php echo $_POST['rga']?></li>
				<li> Meu idade é: <?php echo $_POST['idade']?></li>
				<li> Meu endereço é: <?php echo $_POST['endereço']?></li>
			<ul>
		<?php else: ?>
			<h1>Não tem nada</h1>
		<?php endif; ?>
		
		<div class = "col col-md-12">
			<table class = "table table-hover table-striped">
				<thead><tr>
					<th>Nome</th>
					<th>Email</th>
					<th>RGA</th>				
					<th>Idade</th>
					<th>Endereço</th>
				</thead>
			</table>
		</div>
	</div>
</div>

</body>

</html>