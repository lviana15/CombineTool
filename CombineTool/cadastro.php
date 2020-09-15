<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>CombineTool</title>
	<link rel="stylesheet" href="css/cadastro.css">
	<link rel="icon" href="img/icon.png">
</head>
<body>
	<div class="principal">
		<div class="img-atleta">
			<img src="img/lebron.png" class="img-lebron">
		</div>

		<div class="login">
			<form action="cadastrar.php" method="POST">
				<input type="text" class="input" name="nome" placeholder="Nome">
				<input type="email" class="input" name="email" placeholder="Email">
				<input type="text" class="input" name="cref" placeholder="CREF">
				<input type="password" class="input" name="senha" placeholder="Senha">
				<input type="submit" class="bttn" name="entrar" value="Cadastrar">
			</form>
		</div>

		
	</div>

	<nav>
		<div class="menu">
			<a href="index.php">Login</a>
			<a href="#">Cadastro</a>
			<a href="#">Sobre</a>
		</div>
	</nav>
</body>
</html>