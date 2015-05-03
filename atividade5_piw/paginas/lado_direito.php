<div class="col-md-2 col-sm-12 col-xs-12">
	<?/*<form class="navbar-form navbar-left pesquisar" role="search" action="<?=$url?>/paginas/pesquisar.php" method="post">
		<p class="titulos_blocos">Filtrar</p>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search" name="nome_busca">
		</div>
		 <button type="submit" class="btn btn-default">Submit</button>
	</form>*/?>
	
	<form action="<?=$url?>/paginas/pesquisar.php" method="post" class="pesquisar">
		<p class="titulos_blocos">Filtrar</p>
		<?/*<input type="text" name="nome_busca" placeholder="Buscar participantes" />
		<button class="btn btn-warning" type="submit">Buscar</button>*/?>
		
		<div class="input-group">
		  <input type="text" class="form-control" name="nome_busca">
		  <span class="input-group-btn">
			<button class="btn btn-default" type="submit">Go!</button>
		  </span>
		</div>
	</form>

	<div class="pesquisar">
		<p class="titulos_blocos">Último perfil visitado</p>
		<?php
			$email_cookie = explode('@',$_SESSION['login']['email']);
			
			if(empty($_COOKIE['ultimoperfil_'.$email_cookie[0]])){?>
				<p id="nenhum_visitado">Nenhum perfil visitado</p>
		<?php
			}
			else{
				$participante_obj_perfil = new Participante('participantes');
				$participante_obj_perfil->setDados(array($_COOKIE['ultimoperfil_'.$email_cookie[0]]));
				list($participante_perfil) = $participante_obj_perfil->getListar('and email=?');
				$participante_obj_perfil->fechar_conexao();
				?>
				<a href="<?=$url?>/paginas/perfil.php?email_perfil=<?=$participante_perfil['email']?>">
					<figure>
						<img src="<?=$url?>/imagens/<?=$participante_perfil['arquivoFoto']?>" alt="Imagem não carregada" title="<?=$participante_perfil['nomeCompleto']?>" />
						<figcaption><?=$participante_perfil['nomeCompleto']." - ".$participante_perfil['email']?></figcaption>
					</figure>
				</a>
		<?php	
			}
		?>
	</div>
</div>
