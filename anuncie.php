<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>Anuncie no blog</title>
		<link href="css/estilo.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div id="principal">
		<?php
			include "cabecalho.html";
		?>
		<div id="corpo">
			<div id="contato_anuncie">
				<h1 class="anuncie_aqui">Anuncie</h1>
					Se tiver interesse em fazer uma parceria ou se deseja anunciar no blog preencha o formulário e escreva um breve resumo sobre o produto/serviço e sua proposta.
					<br><br>
					<label for="assunto">Assunto</label>       
					<br>
					<input type="text" name="assunto" id="assunto">
					<br><br>
					<label for="empresa">Empresa</label>
					<br>
					<input type="text" name="empresa" id="empresa">
					<br><br>
					<label for="seu_email">Email</label>
					<br>
					<input type="text" name="seu_email" id="seu_email">
					<br><br>
					<label for="site_empresa">  Site</label>
					<br>
					<input type="text" name="site_empresa" id="site_empresa">
					<br><br>
					<label for="escreva_aqui">Escreva aqui<br></label><textarea rows="5" cols="50"></textarea><br>
					<br><br>
			</div>
		</div>
		<?php
			include "rodape.html";
		?>
	</div>
</body>
</html>