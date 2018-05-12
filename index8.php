<?php 
$host = "localhost";
$banco = "formulario1";
$usuario = "root";
$senha = "";
$table = "formulario1";

$conexao = mysqli_connect($host, $usuario, $senha, $table);

if(!$conexao){
	die();
	echo "Erro de conexao";
}

mysqli_select_db($conexao, $banco);

$sql ="SELECT * FROM " . $table . " ORDER BY idade";

$resultado = mysqli_query($conexao, $sql);

echo mysqli_error($conexao);


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
		<div class = "col col-md-12">
			<table class = "table table-hover table-striped">
				<thead><tr>
					<th>Nome</th>
					<th>Email</th>
					<th>RGA</th>				
					<th>Idade</th>
					<th>Endereço</th>
				</thead>
				<tbody>
					<?php while($array = mysqli_fetch_assoc($resultado)): ?>
						<tr>
							<td><?php echo $array['nome'] ?></td>
							<td><?php echo $array['email'] ?></td>
							<td><?php echo $array['rga'] ?></td>
							<td><?php echo $array['idade'] ?> </td>
							<td><?php echo $array['endereco'] ?></td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>

</html>
<?php mysqli_close($conexao); ?>