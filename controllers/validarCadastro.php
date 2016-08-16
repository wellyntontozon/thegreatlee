<?php  
try 
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$senha = trim($_POST['SENHACADASTRO']);
		$salt = geraSaltAleatorio();

		$nome = trim(strip_tags($_POST['NOMECADASTRO']));

		if (empty($senha) || strlen($senha) > 10) 
			echo "Senha Inválida";
		
		echo "<br>";
		
		if (!is_string($nome) || empty($nome) || strlen($nome > 30)) 
			echo "Nome Invalido";

		echo "<br>";

		Require_once 'UsuarioVo.php';
		Require_once 'Conexao.php';
 		
		$con = new Conexao();

		//Linhas para gravação dos usuario na tabela
		$senha = hash('sha512', $senha.$salt);
		// echo "SALT - ".$salt.'<br>';
		// echo "SENHA - ".$senha;
		// echo "NOME - ".$nome;

		$Vo = new UsuarioVo($nome, $senha, $salt);
  
    	header('Location: ../telas/Formulario.html');

    	$usu = $con->Cadastro($Vo);
        
	}else
	{
		throw new Exception("Erro",1);
	}
	
	} catch (Exception $e) {
		echo $e->GETMESSAGE("teste");
	}

	function geraSaltAleatorio($tamanho = 128) 
	{
		return substr(HASH('sha512',mt_rand()), 0, $tamanho);
	}


?>