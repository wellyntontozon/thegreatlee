<?php
		Require_once'nav.php';
		Require_once '../controllers/Sessao.php';	

		session::valida('id');

		//echo "Bem vindo ".session::get('nome');
	
?>
<div class="container">
	<table class="table table-condensed">
	<tr>
	  <td class="active">ID</td>
	  <td class="success">RESUMO</td>
	  <td class="warning">DESCRIÇÃO</td>
	  <td class="danger">DATA ABERTURA</td>
	  <td class="info">SOLICITANTE</td>

	</tr>
	<?php  
	Require_once '../controllers/Conexao.php';
	$con = new Conexao();
	$result = $con->ConsultaLeftJoin();
	foreach ($result as $key) {
	echo "<tr>";
	echo "<td>";
	echo "$key->id";
	echo "</td>";
	echo "<td>";
	echo "$key->resumo";
	echo "</td>";
	echo "<td>";
	echo "$key->descricao";
	echo "</td>";
	echo "<td>";
	echo "$key->data_criacao";
	echo "</td>";
	echo "<td>";
	echo "$key->nome";
	echo "</td>";
	echo "</tr>";
	}
?>
	</table>
</div>


