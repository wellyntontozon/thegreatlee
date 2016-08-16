<?php 
	Require_once '/../controllers/Conexao.php';		

	$con = new Conexao();

	$result = $con->ConsultarTipoServico();
	foreach ($result as $key) {
		echo "$key->id";
	}

	$testando = mysql_real_escape_string( $_REQUEST['testando'] );

	$cidades = array();

	while ( $row = mysql_fetch_assoc( $result ) ) {
		$cidades[] = array(
			'id' => $row['id'],
			'tipo_nome'	=> $row['tipo_nome'],
		);
	}
	echo( json_encode( $cidades ) );