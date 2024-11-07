<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NN é burro</title>
	<?php 
	session_start();
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["senha"] = $_POST["senha"];



	if ($_SESSION["email"] == "admin" && $_SESSION["senha"] == 1234) {
		$_SESSION["adm"] = "administrador";
		$_SESSION["grava"] = "administrador";
		
	}elseif ($_SESSION["email"] == "visit" && $_SESSION["senha"] == 12345) {
		$_SESSION["adm"] = "visitante";
		$_SESSION["grava"] = "visitante";		
	}elseif ($_SESSION["email"] == "colab" && $_SESSION["senha"] == 123456){
		$_SESSION["adm"] = "colaborador";
		$_SESSION["grava"] = "colaborador";
	}
	 ?>
	
</head>
<body>
	<h1>Seja Bem-vindo</h1>
		<?php echo $_SESSION["adm"]; ?>

	<form name="redirecionar" method="post" action="Form.php">
		<input type="submit" name="sair" value="voltar">
	</form>

	<form name="redirecionar" method="post" action="Form.php">
		<?php session_destroy(); ?>
		<input type="submit" name="sair" value="sair">
	</form>
</body>
</html>