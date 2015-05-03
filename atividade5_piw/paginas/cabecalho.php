<?php
	include('../includes/conexao.php');
	include('../classes.php');
	include('../url.php');
	include('analisar_logado.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Atividade Aberta 05</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?=$url?>/css/style.css" />
	<link rel="stylesheet" href="<?=$url?>/css/internas.css" />
	<link href="<?=$url?>/includes/bootstrap/css/bootstrap.css" rel="stylesheet" />
	
	<script src="<?=$url?>/js/jquery-1.7.2.js" ></script>
	<script src="<?=$url?>/js/funcoes.js" ></script>
	<script src="<?=$url?>/includes/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
	<?/*<header id="cabecalho" class="navbar navbar-inverse" role="navigation">
		<div class="navbar-inner">  
			<div class="container-fluid">
				 <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">   
					 <span class="icon-bar"></span>   
					 <span class="icon-bar"></span>  
					 <span class="icon-bar"></span> 
				 </a>  
				<a href="<?=$url?>/paginas/home.php">
					<figure>
						<img src="<?=$url?>/imagens/logo_puc.png" alt="Imagem não carregada" />
					</figure>
				</a>
				
				<div class="nav-collapse"> 
					<ul class="nav navbar-nav">
						<li><a href="<?=$url?>/paginas/home.php">Olá <?=$_SESSION['login']['nomeCompleto']?>!</a></li>
						<li><a href="<?=$url?>/controller/logoff.php">(Sair)</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>*/?>
	
<nav class="navbar navbar-default" role="navigation">
	<header id="cabecalho">
	  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#opcoes">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a href="<?=$url?>/paginas/home.php">
				<figure>
					<img src="<?=$url?>/imagens/logo_puc.png" alt="Imagem não carregada" />
				</figure>
			  </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="opcoes">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="<?=$url?>/paginas/home.php">Olá <?=$_SESSION['login']['nomeCompleto']?>!</a></li>
				<li><a href="<?=$url?>/controller/logoff.php">(Sair)</a></li>
			  </ul>
			</div>
	  </div>
	</header>
</nav>

	
