<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>Página Administrador</title>
		<link href="css/estilo.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div id="principal">
		<div id="corpo">
		<?php
			$erro = array();
			$dados = array();
			if(!isset($_POST['senha'])){
				include "login_adm.php";
			}else{
				$valido = false;
				if(isset($_POST['senha']) && !empty($_POST['nome'])){
					if(($_POST['senha'] == "K&1IV&N") && ($_POST['nome'] == "Keliven")){
						$valido = true;
					}else{
						$dados['senha'] = $_POST['senha'];
						$erro["diferente"] = "Senha não preenchida.<br><br>";
					}
				}else{
					$dados['nome'] = $_POST['nome'];
					$erro["vazia"] = "Nome não preenchido<br>";
				}
				if($valido == true){
					include "pag_adm.php";
				}else{
					include "login_adm.php";
				}
			}
		?>

		</div>
	</div>
</body>
</html>