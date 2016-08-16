<?php  
try 
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$tiposervico = trim(strip_tags($_POST['TIPOSERVICO']));

		if (empty($tiposervico)) 
			echo "insere nome";
				
		Require_once 'TipoChamadoVo.php';
		Require_once 'Conexao.php';
 		
		$con = new Conexao();
		echo "$tiposervico";
		$Vo = new TipoChamadoVo($tiposervico);


    	header('Location: ../telas/index.php');

    	$con->CadastrarTipoServico($Vo);
        
	}else
	{
		throw new Exception("Erro",1);
	}
	
	} catch (Exception $e) {
		echo $e->GETMESSAGE("ErroValidarServico");
	}
?>