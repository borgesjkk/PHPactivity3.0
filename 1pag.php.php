<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dados</title>
	<?php 
	session_start();

	 ?>
</head>
<body>

	 
		<form name="Dados_user" method="post" action="Decisao.php.php">
			<p>Informe seus dados:</p>
			<input type="text" name="email"> <br>
			<input type="number" name="senha"> <br>
		<?php echo "voce ja esta logado como " . $_SESSION["grava"] ?>
			
			<br><input type="submit" name="enviar" value="enviar">
		</form>
	
</body>
</html>