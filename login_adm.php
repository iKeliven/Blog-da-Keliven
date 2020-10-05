<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>Login adminstrador</title>
		<link href="css/estilo.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div id="principal">
		<div id="cabecalho">
		<a name="topo">
			<div class="logo">
			<a href="index.php"><img align="center" src="imagens/keliven2.png" title="Bem-vindo ao blog!" alt="logo-blog" width="50%"/></a>
			</div>
		</a>
			<img align="center" src="imagens/livros1.png"alt="livros" id="livro1" width="30%"/>
		</div>
		<div id="corpo">
		<div id="login_adm">
			<br><br>
			<form action="destino_login.php" method="POST">
			<label for="nome_adm">Nome: </label><input type="text" name="nome" id="nome_adm" ><br>
			<br><br>
			<label for="senha_adm">Senha: </label><input type="password" name="senha" id="senha_adm" >
			<br><br>
			<input type="submit" value=" Entrar " action="destino_login.php">
			<br><br>
			<a href="#" class="esqueceu_senha">Esqueceu a senha? Clique aqui</a>
			</form>
		</div>
		
		</div>
		<?php
			include "rodape.html";
		?>
	</div>
</body>
</html>