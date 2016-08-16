<?php 
		Require_once'nav.php';
		Require_once '/../controllers/Sessao.php';		

		session::valida('id');

		//echo "Bem vindo ".session::get('nome');
?> 
<style type="text/css">
	.container-fluid > div{
		
	}

</style>
<!-- <script type="text/javascript" src="criarservicos.php"></script>
 -->


<!-- Modal -->
  <div class="modal-dialog" role="document">
<div class="container-fluid col-md-12">
<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Abrir Chamados</h4>
      </div>
      <div class="modal-body">
       	<form class="form-horizontal" role="form" action="../controllers/validarChamado.php" method="POST">
       	<div class="form-group">
			<div class="col-sm-6">

				<select class="form-control" name=TIPOCHAMADO id="TIPOCHAMADO">
				<?php
				// $result = $con->ConsultarTipoChamados();
				Require_once '../controllers/Conexao.php';	$con = new Conexao();  $result = $con->ConsultarTipoChamados();
				echo "<option>ESCOLHA UM TIPO DE SERVIÇO</option>";

				foreach ($result as $r) {
				echo "<option class=text-uppercase value=$r->id>$r->tipo_nome</option>";

				}
				
				
				?>
				</select>
			</div>
			<div class="col-sm-6">
				<select name="SERVICOS" class="form-control" id="SERVICOS">
					<option value="">ESCOLHA UM SERVIÇO</option>
				</select>
				<script src="http://www.google.com/jsapi"></script>
				<script type="text/javascript">
				  google.load('jquery', '1.3');
				</script>		
				<script type="text/javascript">
					$(function(){
						$('#TIPOCHAMADO').change(function(){
							if( $(this).val() ) {
								$('#SERVICOS').hide();
								$.getJSON('teste.ajax.php?search=',{testando: $(this).val(), ajax: 'true'}, function(j){
									var options = '<option value="">ESCOLHA UM SERVIÇO</option>';	
									for (var i = 0; i < j.length; i++) {
										options += '<option value="' + j[i].id + '"class=text-uppercase>' + j[i].nome_servico + '</option>';
									}	
									$('#SERVICOS').html(options).show();
									$('.carregando').hide();
								});
							} else {
								$('#SERVICOS').html('<option value="">-- Escolha um Hardware --</option>');
							}
						});
					});
				</script>

			</div>
		</div>
			
			<div class="form-group">
				<div class="col-sm-10">
					<input type="text" class="form-control" id="RESUMO" name="RESUMO" placeholder="RESUMO" REQUIRED>
				</div>
				<div class="col-sm-2">
				<?php
				$teste = session::get('id');
					echo "<input type=text readonly=readonly class=form-control id=MATRICULA name=MATRICULA placeholder=MATRICULA value=$teste  REQUIRED>"
				?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<textarea type="text" class="form-control" id="DESCRICAO" name="DESCRICAO" placeholder="DESCRIÇÃO" REQUIRED></textarea>
				</div>
			</div>
			

				<div class="form-group">        
					<div class="col-sm-10">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
				
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</div>
</div>

      <!-- Example row of columns -->
