<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Dojo Mao 2013</a></h1>
				<h3>1 Encontro Coding Dojo de Manaus</h3>
				<p>Dia 31/04 | Teatro Direcional</p>
				<p><?php 
					if($inscricoesAbertas) 
						echo 'Ainda da tempo, inscreva-se'; 
					else 
						echo 'Inscricoes encerradas'; ?>
				</p>
			</div>
			<?php echo $this->element('menu'); ?>
		</div>
		<div id="banner">
			<div class="content"><?php echo$this->Html->Image('dojo.jpg');//" width="1000" height="300" alt="" />?></div>
		</div>
	</div>