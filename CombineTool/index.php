<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>CombineTool</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="icon" href="img/icon.png">
</head>
<body>
	<div class="principal">
		<div class="img-atleta">
			<img src="img/lebron.png" class="img-lebron">
		</div>

		<div class="login">
			<form action="login.php" method="POST">
				<input type="email" class="input" name="email" placeholder="Email">
				<input type="password" class="input" name="senha" placeholder="Senha">
				<input type="submit" class="bttn" name="entrar" value="Entrar">
			</form>
			<a href="#" class="recovery">Esqueceu a senha?</a>
		</div>

		
	</div>

	<nav>
		<div class="menu">
			<a href="#">Login</a>
			<a href="cadastro.php">Cadastro</a>
			<a href="#">Sobre</a>
		</div>
	</nav>
</body>
</html>