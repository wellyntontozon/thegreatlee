<?php  
try 
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$nome = trim(strip_tags($_POST['NOMESERVICO']));

		// if (empty($nome)) 
		// 	echo "insere caralho";
		
		$escolhaservico = $_POST['ESCOLHASERVICO'];
		$descricaoservico = $_POST['DESCRICAOSERVICO'];
		$sla = $_POST	['SLA'];

		if ($escolhaservico == 0) {
			header('Location: ../telas/index.php');
		}
		
		Require_once 'ServicosVo.php';
		Require_once 'Conexao.php';
 		
		$con = new Conexao();

		$Vo = new ServicosVo($nome,$descricaoservico,$sla,$escolhaservico);


    	header('Location: ../telas/index.php');

    	$usu = $con->CadastrarServicos($Vo);
        
	}else
	{
		throw new Exception("Erro",1);
	}
	
	} catch (Exception $e) {
		echo $e->GETMESSAGE("teste");
	}
?>