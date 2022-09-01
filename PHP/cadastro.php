<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title>Cadastro de Cards</title>
	<link rel="stylesheet" href="css/main.css"/>
	<link rel="icon" href="https://www.pngmart.com/files/3/Portal-Transparent-Background.png"/>
</head>
<body>
	<?php
		/*
        include("conectar.php");
    	$consulta=mysqli_query($conexao,"SELECT * from carta");
        while($dados=mysqli_fetch_array($consulta)){
          $id_curso = $dadoscurso['id_curso'];
          $curso = $dadoscurso['curso'];
          echo "<input type='radio' required name='curso' id='$id_curso' value='$id_curso'/><label for='curso'>$curso</label><br/>";
        }echo "<hr/>";
        */
      ?>
      <label for="mat">Matéria</label><br/>
      <input type="text" required name="mat" id="mat"/>
      <br />
      
      <?php 
      echo "<input type='hidden' name='user' id='user' value='".$_SESSION['username']."'>"
      ?>
	<form method="post" action="php/tratamento.php">
		<fieldset>
			<legend><b>Cadastro de Cards</b></legend>
			<input type="radio" value="1" name="tipocarta" id="dragon" required/>
			<label for="dragon">Dragon City</label><br/>
			<input type="radio" value="2" name="tipocarta" id="minecraft1"/>
			<label for="minecraft1">Minecraft (Steve atrás)</label><br/>
			<input type="radio" value="3" name="tipocarta" id="minecraft2"/>
			<label for="minecraft2">Minecraft (Espada atrás)</label><br/>
			<hr/>

			<label for="nome">Digite o nome da carta:</label><br/>
			<input type="text" name="nome" id="nome" required/><br/>
			<hr/>
			<input type="radio" value="1" name="repetida" id="repete" required/>
			<label for="repete">Repete</label><br/>
			<input type="radio" value="0" name="repetida" id="pete"/>
			<label for="pete">Não Repete</label><br/>

			<hr/>
			<label for="classe">Classe da Carta: </label><br/>
			<select id="classe" name="classe" required>
				<option>Lorem ipsum</option>
				<option>Dragão</option>
				<option>Criatura</option>
				<option>Ferramenta</option>
				<option>Poção</option>
				<option>Curiosidade</option>
			</select>
			<hr/>
			<label for="subclasse">Sub-classe da Carta: </label><br/>
			<select id="subclasse" name="subclasse">
				<option>Lorem ipsum</option>
				<option>Adulto</option>
				<option>Jovem</option>
				<option>Baby</option>
				<option>Ovo</option>
				<option>Hostil</option>
				<option>Neutra</option>
				<option>Passiva</option>
				<option>Efeito positivo</option>
				<option>Efeito negativo</option>
			</select>
			<hr/>

			<label for="descreve">Descrição da carta:</label><br/>
			<textarea name="descreve" id="descreve" rows="10" cols="50"></textarea>
			<hr/>

			<label for="atk">Ataque da carta (ATK)</label><br/>
			<input required type="number" min=1 max=9999 name="atk" id="atk"/>
			<hr/>
			<label for="def">Defesa da carta (DEF)</label><br/>
			<input required type="number" min=1 max=9999 name="def" id="def"/>
			<hr/>
			<input type="submit" value="Enviar todos os dados inseridos"/>
		</fieldset>



	</form>
</body>
</html>