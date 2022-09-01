<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title>Tratamento</title>
	<link rel="stylesheet" href="../css/main.css"/>
	<link rel="icon" href="https://www.pngmart.com/files/3/Portal-Transparent-Background.png"/>
</head>
<body>
	<?php
		include("conexao.php");
		$tipocarta=$_POST['tipocarta'];
		$nome=$_POST['nome'];
		$classe=$_POST['classe'];
		if ($classe=="Lorem ipsum") {
			$classe=null;
		}
		$subclasse=$_POST['subclasse'];
		if ($subclasse=="Lorem ipsum") {
			$subclasse=null;
		}
		$repetida=$_POST['repetida'];
		$descreve=$_POST['descreve'];
		$atk=$_POST['atk'];
		$def=$_POST['def'];
		mysqli_query($conexao, "insert into carta(tipo, nome, classe, subclasse, repete, descreve, atk, def) values ('$tipocarta','$nome','$classe','$subclasse','$repetida','$descreve','$atk', '$def')");
		header("location: exibir.php");
	?>
</body>
</html>