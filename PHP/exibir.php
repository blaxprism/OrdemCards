<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="../css/main.css"/>
		<link rel="icon" href="https://www.pngmart.com/files/3/Portal-Transparent-Background.png"/>
		<title>Exibição</title>
	</head>
	<body>
		<hr/>
		<h1>Cards</h1>
		<hr/>
		<a href="../index.php">index</a><br/>
		<a href="cadastro.php">Cadastrar</a><hr/>
		<?php
			include("conexao.php");
			echo "<h2>Dragon City</h2><hr/>";
			$consulta=mysqli_query($conexao,"SELECT * from carta where tipo=1");
			while($dados=mysqli_fetch_array($consulta)){
				$tipocarta=$dados['tipo'];
				$nome=$dados['nome'];
				$classe=$dados['classe'];
				$subclasse=$dados['subclasse'];
				$repetida=$dados['repete'];
				$descreve=$dados['descreve'];
				$atk=$dados['atk'];
				$def=$dados['def'];
				$id=$dados['id_carta'];
				echo "Nome da carta: $nome<br/>";
				echo "Classe da carta: $classe<br/>";
				echo "Sub-Classe da carta: $subclasse<br/>";
				if ($repetida==1) {
					echo("A carta é repetida<br/>");
				}else{
					echo("A carta não é repetida<br/>");
				}
				echo "Descrição da carta: $descreve<br/>";
				echo "ATK: $atk<br/>";
				echo "DEF: $def<hr/>";

			}
			echo "<h2>Minecraft(Steve atrás)</h2><hr/>";
			$consulta=mysqli_query($conexao,"SELECT * from carta where tipo=2");
			while($dados=mysqli_fetch_array($consulta)){
				$tipocarta=$dados['tipo'];
				$nome=$dados['nome'];
				$classe=$dados['classe'];
				$subclasse=$dados['subclasse'];
				$repetida=$dados['repete'];
				$descreve=$dados['descreve'];
				$atk=$dados['atk'];
				$def=$dados['def'];
				$id=$dados['id_carta'];
				echo "Nome da carta: $nome<br/>";
				echo "Classe da carta: $classe<br/>";
				echo "Sub-Classe da carta: $subclasse<br/>";
				if ($repetida==1) {
					echo("A carta é repetida<br/>");
				}else{
					echo("A carta não é repetida<br/>");
				}
				echo "Descrição da carta: $descreve<br/>";
				echo "ATK: $atk<br/>";
				echo "DEF: $def<hr/>";

			}

			echo "<h2>Minecraft(Espada atrás)</h2><hr/>";
			$consulta=mysqli_query($conexao,"SELECT * from carta where tipo=3");
			while($dados=mysqli_fetch_array($consulta)){
				$tipocarta=$dados['tipo'];
				$nome=$dados['nome'];
				$classe=$dados['classe'];
				$subclasse=$dados['subclasse'];
				$repetida=$dados['repete'];
				$descreve=$dados['descreve'];
				$atk=$dados['atk'];
				$def=$dados['def'];
				$id=$dados['id_carta'];
				echo "Nome da carta: $nome<br/>";
				echo "Classe da carta: $classe<br/>";
				echo "Sub-Classe da carta: $subclasse<br/>";
				if ($repetida==1) {
					echo("A carta é repetida<br/>");
				}else{
					echo("A carta não é repetida<br/>");
				}
				echo "Descrição da carta: $descreve<br/>";
				echo "ATK: $atk<br/>";
				echo "DEF: $def<hr/>";

			}
		?>
	</body>
</html>