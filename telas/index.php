	teste
	<?php
		Require_once'nav.php';
		Require_once '../controllers/Sessao.php';	

		session::valida('id');

		//echo "Bem vindo ".session::get('nome');
	
	?>
	<!-- <br><br>

	<a href="logout.php"> <span> Logout</span></a> -->
<div class="container col-md-12">
	<div class="row-fluid col-md-3">
        <div class="span3">
			<div class="well sidebar-nav">
				<ul class="nav">
				  <li class="nav-header">The Great Lee</li>
				  <li class="active"><a href="index.php">Inicio</a></li>
				  <li><a href="CatalogoDeServicos.php">Catálogo de Serviços</a></li>
				  <li><a href="CadastroServicos.php">Cadastrar Servicos</a></li>
				  <li><a href="ConsultarChamados.php">Consultar Chamados</a></li>
				</ul>
			</div>
        </div><!--/span-->
    </div>
    <div class="container col-md-8">
	  <div class="jumbotron">
	    <h1>Bootstrap Tutorial</h1> 
	    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
	    responsive, mobile-first projects on the web.</p> 
		</div>
	</div>	
</div>