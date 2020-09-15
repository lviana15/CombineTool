<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CombineTool</title>
	<link rel="stylesheet" href="css/editar.css">
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

	<div class="form-edit">
		<?php 
			$consulta = "SELECT nome, email, cref, senha FROM usuario WHERE email = '{$_SESSION['email']}'";
			$result = mysqli_query($conexao, $consulta);
			while ($row = $result->fetch_assoc()) {
			?>
		<form action="update.php" method="POST">
			Nome: <input type="text" class="input" name="nome" value="<?php echo $row['nome']; ?>">
			Email: <input type="email" class="input" name="email" value="<?php echo $row['email']; ?>">
			CREF: <input type="text" class="input" name="cref" value="<?php echo $row['cref']; ?>">
			Senha: <input type="password" class="input" name="senha" value="<?php echo $row['senha']; ?>">
			<input type="submit" class="bttn" name="entrar" value="Confirmar">
		</form>
		<?php  }
			?>
	</div>

</body>
</html>