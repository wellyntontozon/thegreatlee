<?php  
try 
{
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$senha = trim($_POST['SENHA']);
		//$salt = geraSaltAleatorio();

		$nome = trim(strip_tags($_POST['NOME']));

		if (empty($senha) || strlen($senha) > 10) 
			echo "Senha Inválida";
		
		echo "<br>";
		
		if (!is_string($nome) || empty($nome) || strlen($nome > 30)) 
			echo "Nome Invalido";

		echo "<br>";

		Require_once 'UsuarioVo.php';
		Require_once 'Conexao.php';
		Require_once 'Sessao.php';
 		
		$con = new Conexao();

		//Linhas para gravação dos usuario na tabela

		// $senha = hash('sha512', $senha.$salt);
		// echo "SALT - ".$salt.'<br>';
		// echo "SENHA - ".$senha;

		$Vo = new UsuarioVo($nome, $senha);

		// if(empty($con->BuscarLogin($Vo)))
  //           throw new Exception("User ou senha invalidos(2)");

		$usu = $con->BuscarLogin($Vo);
        
        session::init();
        session::set('id',$usu->id_usuario);
        session::set('nome',$usu->nome);
        header('Location: ../telas/index.php');
        
	}else
	{
		throw new Exception("Erro",1);
	}
	
	} catch (Exception $e) {
		echo $e->GETMESSAGE();
	}


?>