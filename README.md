# Cadastro de Cards HTML_PHP
Cadastra Minhas cards(aquelas que brincam de bafo) <br/>
Organiza elas em ordem de força <br/>
Feito em HTML, CSS, PHP e SQL <hr/>
Arquivos e suas funções:<br/>
<h2>index.php:</h2>
	Página inicial
<h2>cadastro.php: </h2>
	Recebe os dados informados através do html com formulários <br/>
	Envia para o tratamento.php por método POST<br/>
	Valores Informados:<br/>
	Tipo da carta(marca)<br/>
	Nome da carta<br/>
	Classe<br/>
	Subclasse<br/>
	Carta repetida?<br/>
	Descrição da carta<br/>
	Ataque da carta<br/>
	Defesa da carta<hr/>
<h2>tratamento.php:</h2>
	Inserere os valores recebidos pela index no banco de dados(cards)<br/>
	Se conecta ao banco de dados pelo arquivo conexão.php<hr/>
<h2>conexão.php:</h2>
	Conecta se ao banco de dados<br/>
	Caso não consiga exibe uma mensagem de erro<hr/>
<h2>Cards.sql</h2>
	Arquivo sql do banco de dados<hr/>
<h2>exibir.php</h2>
	recebe os valores salvos no banco de dados(cards)<br/>
	Exibe os dados salvos em tabelas
<h2>Para fazer</h2>
	<ol>
		Criar tabelas no banco de dados para:
		<li>tipos de cards</li>
		<li>atributos(ligar ao tipo de card por FK)</li>
		<li>classe da carta(ligar ao tipo de card por FK)</li>
		<li>subclasse da carta(ligar a classe da carta e ao tipo de card)</li>
	</ol>


