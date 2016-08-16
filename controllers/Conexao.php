<?php  

	class Conexao {
		
		private $con;

		public function conectaBD() {
        $user = "root";
        $pass = "1@asdfg";
        $name = "aprendendo";
        $host = "localhost";
	    return new PDO("mysql:host=" . $host . ";dbname=" . $name, $user, $pass);
	    }
	    public function fechar(){
	        $this->con = null;
	    }

	    public function __construct() {
	        $this->con = $this->conectaBD() or die("erro");
	        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $this->con->exec("set names utf8");
	    }

	    public function BuscarLogin(UsuarioVo $VO) 
	    {     
        
        $salt = $this->BuscaSalt($VO); 
        if(empty($salt['salt']))
            throw new Exception("User ou senha invalidos(1)");
            
        $salt=$salt['salt'];
        $senha = hash('sha512',$VO->GetSenha().$salt);

        $sql = "SELECT * from usuario where nome='{$VO->GetNome()}' and senha='{$senha}' ";

        $st = $this->con->prepare($sql);
        $st->execute();
        $st->setFetchMode(PDO::FETCH_OBJ);
        return $st->fetch();
    	}

	    public function BuscaSalt(UsuarioVo $VO)
	    {
	        $sql = "SELECT salt from usuario where nome='{$VO->GetNome()}' ";
	        $st = $this->con->prepare($sql);
	        $st->execute();
	        $st->setFetchMode(PDO::FETCH_ASSOC);
	        return $st->fetch();
	    }

	     /** 
		* @summary Este método serve para cadastrar o usuário no banco
		* @parm $Vo
		* @see Cadastro()
		* @return $st->fetch
		*/
	    public function Cadastro(UsuarioVo $VO)
	    {
         
        // $senha = hash('sha512',$VO->GetSenha());
        // $salt=$salt['salt'];
        //$senha = hash('sha512',$VO->GetSenha().$VO->GetSalt());


        $sql = "INSERT INTO `aprendendo`.`usuario` (`nome`, `senha`, `salt`, `status`) VALUES ('{$VO->GetNome()}', '{$VO->GetSenha()}', '{$VO->GetSalt()}', 'i')";
        $st = $this->con->prepare($sql);
        $st->execute();
        $st->setFetchMode(PDO::FETCH_OBJ);
        return $st->fetch();
	    }

	    public function CadastrarServicos(ServicosVo $VO){
		    $sql ="INSERT INTO `aprendendo`.`servicos` (`nome_servico`, `descricao`, `sla`, `tipo_chamados_id`) VALUES ('{$VO->GetNomeServico()}', '{$VO->GetDescricao()}', '{$VO->GetSla()}', '{$VO->GetTipoChamadosId()}');";
		    $st = $this->con->prepare($sql);
	        $st->execute();
	        $st->setFetchMode(PDO::FETCH_OBJ);
	        return $st->fetch();
    	}

		

    	//Realiza consulta de todos os serviços da tabela SERVICOS.
    	public function ConsultarServicos($tipo){
		    $sql ="SELECT * FROM `aprendendo`.`servicos` WHERE `tipo_chamados_id` = '{$tipo}' ;";
		    $st = $this->con->prepare($sql);
	        $st->execute();
	        $st->setFetchMode(PDO::FETCH_OBJ);
        	return $st->fetchALL();
    	}

    	public function ConsultarTipoChamados(){
		    $sql ="SELECT * FROM `aprendendo`.`tipo_chamados`;";
		    $st = $this->con->prepare($sql);
	        $st->execute();
	        $st->setFetchMode(PDO::FETCH_OBJ);
        	return $st->fetchALL();
    	}

    	public function CadastrarChamado(ChamadosVo $VoChamados){
    		$sql ="INSERT INTO `aprendendo`.`chamados` (`resumo`, `descricao`, `status`, `servicos_id`) VALUES ('{$VoChamados->GetResumo()}', '{$VoChamados->GetDescricao()}', 'a', '{$VoChamados->GetServicoId()}');";
    		$st = $this->con->prepare($sql);
	        $st->execute();
			$idChamado = $this->con->lastInsertId();

			$sql = "INSERT INTO `aprendendo`.`chamados_has_usuario` (`chamados_id`, `usuario_id_usuario`) VALUES ('{$idChamado}', '{$VoChamados->GetMatricula()}');";
			$st = $this->con->prepare($sql);
	        $st->execute();
	        
	        // $st->setFetchMode(PDO::FETCH_OBJ);
        	// return $st->fetchALL();
    	}

    	public function CadastrarTipoServico(TipoChamadoVo $VoTipoServico){
    		$sql = "INSERT INTO `aprendendo`.`tipo_chamados` (`tipo_nome`) VALUES ('{$VoTipoServico->GetTipoNome()}');";
    		$st = $this->con->prepare($sql);
	        $st->execute();
    	}
    	
    	public function ConsultaLeftJoin(){
    		$sql ="SELECT * FROM chamados left join chamados_has_usuario on chamados_id = chamados.id left join usuario on id_usuario = usuario_id_usuario;";
    		$st = $this->con->prepare($sql);
	        $st->execute();
	        $st->setFetchMode(PDO::FETCH_OBJ);
        	return $st->fetchALL();
    	}
	}
?>