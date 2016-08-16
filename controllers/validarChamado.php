<?php 
try{ 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$resumo = $_POST['RESUMO'];
		if (empty($resumo))
			echo "Digite Novamente o Resumo";

		$descricao = $_POST['DESCRICAO'];
		if (empty($descricao)) 
			echo "Digite Novamente a Escrição";
		
		$servico = $_POST['SERVICOS'];

		$matricula = $_POST['MATRICULA'];

		require_once 'Conexao.php';
		require_once 'ChamadosVo.php';
		

		$con = new Conexao();
		$Vo = new ChamadosVo($resumo, $matricula, $descricao, "a", $servico);

		header("location: ../telas/index.php");

		$con->CadastrarChamado($Vo);



	}else
	{
		throw new Exception("Erro",1);
	}
	
	} catch (Exception $e) {
		echo $e->GETMESSAGE("CatalogoDeServicos Erro no form de chamado");
	} 

?>