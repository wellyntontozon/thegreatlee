<?php
		Require_once'nav.php';
		Require_once '/../controllers/Sessao.php';		

		session::valida('id');

		//echo "Bem vindo ".session::get('nome');
	
	?>
<div class="container">
	<div class="container col-md-5 align="center" ">
	  <h2 align="center">Cadastro Serviços</h2>
	  <form class="form-horizontal" role="form" method="POST" action="../controllers/validarServico.php">
	    <div class="form-group">
	      <label class="control-label col-md-2" for="NOMESERVICO">Servico</label>
	      <div class="col-md-10">
	        <input type="text" class="form-control" id="NOMESERVICO" name="NOMESERVICO" placeholder="Digite o nome do serviço." REQUIRED>
	      </div>
	    </div>
	    <div class="form-group">
	        <label class="col-md-2">Descrição</label>
	    	<div class="col-md-10">
	    		<textarea class="form-control" id="DESCRICAOSERVICO" name="DESCRICAOSERVICO" placeholder="Digite a Descrição do Serviço." REQUIRED></textarea>
	    	</div>
	    </div>
	    <div class="form-group">
	      	<label class="control-label col-md-2" for="SLA">SLA</label>
	  		<div class="col-md-5">
	        	<input type="text" class="form-control" id="SLA" name="SLA" placeholder="SLA" REQUIRED>
	      	</div>
			<div class="col-md-5">
				<select class="form-control" name="ESCOLHASERVICO" REQUIRED>
				<?php
				Require_once '/../controllers/Conexao.php';	$con = new Conexao(); $result = $con->ConsultarTipoChamados();
				echo "<option value=>Tipo Servico</option>";

				foreach ($result as $r) {
				echo "<option value=$r->id>$r->tipo_nome</option>";
				}

				?>
				</select>
			</div>
	    </div>    
	    <div class="form-group">        
	      <div align="center" class="col-sm-offset-2 col-md-10">
	        <button type="submit" class="btn btn-success col-md-12">Submit</button>
	      </div>
	    </div>
	  </form>
	</div>

	<div class="container col-md-5">
	  <h2 align="center">Cadastro Tipo Serviço</h2>
	  <form class="form-horizontal" role="form" method="POST" action="../controllers/validarTipoServico.php">
	    <div class="form-group">
	    	<label class="control-label col-md-2" for="TIPOSERVICO">TIPO SERVIÇO</label>
	      <div class="col-md-10">
	        <input type="text" class="form-control" id="TIPOSERVICO" name="TIPOSERVICO" placeholder="Digite o tipo que deseja cadastrar..." REQUIRED>
	      </div>
	    </div>
	   <div class="form-group">        
	      <div align="center" class="col-sm-offset-2 col-md-10">
	        <button type="submit" class="btn btn-success col-md-12">Submit</button>
	      </div>
	    </div>
	  </form>
	</div>
</div>
					
					
					