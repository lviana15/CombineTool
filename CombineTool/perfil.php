<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CombineTool</title>
	<link rel="stylesheet" href="css/perfil.css">
	<link rel="icon" href="img/icon.png">
</head>
<body>

<div class="top">
	<a href="logout.php">Sair</a>
</div>

	<nav>
		<div class="menu">
			<a href="#">Atletas</a>
			<a href="#">Testes</a>
			<a href="#">Resultados</a>
			<a href="perfil.php">Perfil</a>
		</div>
	</nav>

	<div class="dados">
			<table>
				<?php 
				$consulta = "SELECT nome, email, cref, senha FROM usuario WHERE email = '{$_SESSION['email']}'";
				$result = mysqli_query($conexao, $consulta);
				while ($row = $result->fetch_assoc()) {
				?>
				<tr><td>Nome:</td> <td><?php echo $row['nome']; ?> </td></tr>
				<tr><td>Email:</td><td><?php echo $row['email']; ?></tr>
				<tr><td>CREF:</td><td><?php echo $row['cref']; ?></tr>
			<?php  }
			?>
			</table>
		<a href= "editar.php" class="botao">Editar Dados</a>
	</div>

</body>
</html>