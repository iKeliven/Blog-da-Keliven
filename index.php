<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>Keliven Demarchi Blog</title>
		<link href="css/estilo.css" rel="stylesheet" type="text/css">
	</head>
<body>
	<div id="principal">
			<div class="menu_login">
			<ul id="menu_login">
				<li><a href="login_adm.php" id="login"> Login </a>
					<ul>
						<li><a href="login_adm.php" id="login"> Sair </a></li>
					</ul>
				</li>
			</ul>
			</div>
		<?php
			include "cabecalho.html";
		?>
		<div id="corpo">
			<?php
				$categoria_conteudo= "Dicas da Keliven";
				if (isset ($_POST['categoria_conteudo'])){
					if(!empty($_POST['categoria_conteudo'])){
						$categoria_conteudo=$_POST['categoria_conteudo'];
					}
				}
				$titulo_conteudo="Sem título";
				if(isset($_POST['titulo_conteudo'])){
					if (!empty($_POST['titulo_conteudo'])){
					$titulo_conteudo=$_POST['titulo_conteudo'];
					}
				}
				$texto = "Sem texto!";
				if(isset($_POST['texto'])){
					if(!empty($_POST['texto'])){
						$texto = $_POST['texto'];
					}
				}
				$arquivo1 = "";
				if(isset($_POST['arquivo1'])){
					if(!empty($_POST['arquivo1'])){
						$arquivo1 = $_POST['arquivo1'];
					}
				}
				$digite1="";
				if(isset($_POST['digite1'])){
					if(!empty($_POST['digite1'])){
						$digite1 = $_POST['digite1'];
					}
				}
				$arquivo2 = "";
				if(isset($_POST['arquivo2'])){
					if(!empty($_POST['arquivo2'])){
						$arquivo1 = $_POST['arquivo2'];
					}
				}
				$digite2="";
				if(isset($_POST['digite2'])){
					if(!empty($_POST['digite2'])){
						$digite1 = $_POST['digite2'];
					}
				}
				$arquivo3 = "";
				if(isset($_POST['arquivo3'])){
					if(!empty($_POST['arquivo3'])){
						$arquivo1 = $_POST['arquivo3'];
					}
				}
				$digite3="";
				if(isset($_POST['digite3'])){
					if(!empty($_POST['digite3'])){
						$digite1 = $_POST['digite3'];
					}
				}
				$arquivo4 = "";
				if(isset($_POST['arquivo4'])){
					if(!empty($_POST['arquivo4'])){
						$arquivo1 = $_POST['arquivo4'];
					}
				}
				$digite4="";
				if(isset($_POST['digite4'])){
					if(!empty($_POST['digite4'])){
						$digite1 = $_POST['digite4'];
					}
				}
				$arquivo5 = "";
				if(isset($_POST['arquivo5'])){
					if(!empty($_POST['arquivo5'])){
						$arquivo1 = $_POST['arquivo5'];
					}
				}
				$digite5="";
				if(isset($_POST['digite5'])){
					if(!empty($_POST['digite5'])){
						$digite1 = $_POST['digite5'];
					}
				}
				$arquivo6 = "";
				if(isset($_POST['arquivo6'])){
					if(!empty($_POST['arquivo6'])){
						$arquivo1 = $_POST['arquivo6'];
					}
				}
				$digite6="";
				if(isset($_POST['digite6'])){
					if(!empty($_POST['digite6'])){
						$digite1 = $_POST['digite6'];
					}
				}
				$arquivo7 = "";
				if(isset($_POST['arquivo7'])){
					if(!empty($_POST['arquivo7'])){
						$arquivo1 = $_POST['arquivo7'];
					}
				}
				$digite7="";
				if(isset($_POST['digite7'])){
					if(!empty($_POST['digite7'])){
						$digite1 = $_POST['digite7'];
					}
				}
				$arquivo8 = "";
				if(isset($_POST['arquivo8'])){
					if(!empty($_POST['arquivo8'])){
						$arquivo1 = $_POST['arquivo8'];
					}
				}
				$digite8="";
				if(isset($_POST['digite8'])){
					if(!empty($_POST['digite8'])){
						$digite1 = $_POST['digite8'];
					}
				}
				$arquivo9 = "";
				if(isset($_POST['arquivo9'])){
					if(!empty($_POST['arquivo9'])){
						$arquivo1 = $_POST['arquivo9'];
					}
				}
				$digite9="";
				if(isset($_POST['digite9'])){
					if(!empty($_POST['digite9'])){
						$digite1 = $_POST['digite9'];
					}
				}
				$arquivo10 = "";
				if(isset($_POST['arquivo10'])){
					if(!empty($_POST['arquivo10'])){
						$arquivo1 = $_POST['arquivo10'];
					}
				}
				$digite10="";
				if(isset($_POST['digite10'])){
					if(!empty($_POST['digite10'])){
						$digite1 = $_POST['digite10'];
					}
				}
				
			?>
		</div>
		<?php
			include "rodape.html";
		?>
	</div>
	
</body>
</html>