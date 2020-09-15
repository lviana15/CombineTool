<?php
	session_start();
	include("conexao.php");

	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$cref = mysqli_real_escape_string($conexao, $_POST['cref']);
	$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

	$sql = "select count(*) as total from usuario where email = '$email'";
	$result = mysqli_query($sql);
	$row = mysqli_fetch_assoc($result);

	if($row['total'] == 1) {
		$_SESSION['email_existe'] = true;
		header('Location: cadastro.php');
		exit;
	}

	$sql = "INSERT INTO usuario (nome, email, cref, senha) VALUES ('$nome', '$email', '$cref', '$senha')";

	if($conexao->query($sql) === TRUE) {
		$_SESSION['status_cadastro'] = true;
	}

	$conexao->close();

	header('Location: index.php');
	exit;

	?>