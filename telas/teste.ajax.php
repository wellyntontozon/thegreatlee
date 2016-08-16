<?php 
	Require_once '/../controllers/Conexao.php';

	$con = new Conexao();

	$TIPOCHAMADO = $_REQUEST['testando'];

	$result = $con->ConsultarServicos($TIPOCHAMADO);

	$cidades = array();	
	foreach ($result as $key) {
		$cidades[] = array(
			'id' => $key->id,
			'nome_servico'	=> $key->nome_servico,
		);
	}
	
	echo( json_encode( $cidades ) );