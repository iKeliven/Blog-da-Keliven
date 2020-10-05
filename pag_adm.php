<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>Keliven Demarchi Blog</title>
		<link href="css/estilo.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div id="pag_adm">
		<div id="cabecalho">
		<a name="topo">
			<div class="logo">
			<a href="index.php"><img align="center" src="imagens/keliven2.png" title="Bem-vindo ao blog!" alt="logo-blog" width="50%"/></a>
			</div>
		</a>
			<img align="center" src="imagens/livros1.png"alt="livros" id="livro1" width="30%"/>
						<div class="menu_login">
			<ul id="menu_login">
				<li><a href="login_adm.php" id="login"> Login </a>
				<ul>
						<li><a href="login_adm.php" id="login"> Sair </a></li>
					</ul>
				</li>
			</ul>
			</div>
			
		</div>
		<div id="corpo">	
		<div id="pg_adm">	
		<form action="index.php" method="POST">
				<h1>Categoria do conteúdo</h1>
					<input type="radio" name="categoria_conteudo_conteudo" value="Decor" id="decor_cate">
						<label for="decor_cate">Decoração</label>
					<input type="radio" name="categoria_conteudo" value="dicas" id="dicas_cate">
						<label for="dicas_cate">Dicas da Keliven</label>
					<input type="radio" name="categoria_conteudo" value="Dyi" id="dyi_cate">
							<label for="dyi_cate">Faça você mesmo</label><br><br>
					<input type="radio" name="categoria_conteudo" value="livros" id="livros_cate">
						<label for="livros_cate">Livros</label>
					<input type="radio" name="categoria_conteudo" value="Moda/beleza" id="moda_beleza_cate">
						<label for="moda_beleza_cate">Moda/beleza</label>
					<input type="radio" name="categoria_conteudo" value="Músicas" id="musica_cate">
						<label for="musica_cate">Músicas</label><br><br>
					<input type="radio" name="categoria_conteudo" value="Opiniões" id="opinioes_cate">
						<label for="opinioes_cate">Opiniões da Keliven</label>
					<input type="radio" name="categoria_conteudo" value="receitas" id="receitas_cate">
						<label for="receitas_cate">Receitas</label>
					<input type="radio" name="categoria_conteudo" value="Viajens" id="viajens_cate">
						<label for="viajens_cate">Viajens</label>
				<label for="cartola">Cartola</label>
					<input type="text" name="cartola" id="cartola"><br><br>
				<label for="titulo_conteudo"><h1>
					Título do conteúdo</h1></label><input type="text" name="titulo_conteudo" id="titulo_conteudo"><br><br>
				<label for="autor">
					Autor</label><input type="text" name="autor" id="autor"><br><br>
					<textarea rows="10" cols="75" placeholder="Digite o conteúdo" name="texto"></textarea><br>
						Arquivo 1:<input type="file"name="arquivo1"><br><br>
							<textarea rows="2" cols="75" placeholder="Digite uma legenda" name="digite1"></textarea><br>
						Arquivo 2:<input type="file" name="arquivo2"><br><br>
							<textarea rows="2" cols="75" placeholder="Digite uma legenda" name="digite2"></textarea><br>
						Arquivo 3:<input type="file" name="arquivo3"><br><br>
							<textarea rows="2" cols="75" placeholder="Digite uma legenda" name="digite3"></textarea><br>
						Arquivo 4:<input type="file" name="arquivo4"><br><br>
							<textarea rows="2" cols="75" placeholder="Digite uma legenda" name="digite4"></textarea><br>
						Arquivo 5:<input type="file" name="arquivo5"><br><br>
							<textarea rows="2" cols="75" placeholder="Digite uma legenda" name="digite5"></textarea><br>
						Arquivo 6:<input type="file" name="arquivo6"><br><br>
							<textarea rows="2" cols="75" placeholder="Digite uma legenda" name="digite6"></textarea><br>
						Arquivo 7:<input type="file" name="arquivo7"><br><br>
							<textarea rows="2" cols="75" placeholder="Digite uma legenda" name="digite7"></textarea><br>
						Arquivo 8:<input type="file" name="arquivo8"><br><br>
							<textarea rows="2" cols="75" placeholder="Digite uma legenda" name="digite8"></textarea><br>
						Arquivo 9:<input type="file" name="arquivo9"><br><br>
							<textarea rows="2" cols="75" placeholder="Digite uma legenda" name="digite9"></textarea><br>
						Arquivo 10:<input type="file" name="arquivo10"><br><br>
							<textarea rows="2" cols="75" placeholder="Digite uma legenda" name="digite10"></textarea><br>
				<label for="finalize_conteudo"><h1>Finalize o conteúdo</h1></label>
					<textarea rows="4" cols="75" placeholder="Digite o texto"></textarea><br>
				Limpar tudo:<input type="reset" value="limpar"><br><br>
				Enviar: <input type="submit" value="enviar"><br><br>
		</form>
		</div>
		</div>
		<div id="rodape">
		<a href="#cabecalho"><img src="imagens/super_mouse.png" alt="Voltar ao topo"title="Voltar ao topo" id="voltaraotopo" /></a>
		</div>
	</div>
	
</body>
</html>