<?php  
	//VO = Value Obj
	Class ServicosVo{
		Private $id;
		Private $nome_servico;
		Private $descricao;
		Private $sla;
		Private $tipo_chamados_id;
		/** 
		* @summary Este método serve para alterar todos os atributos de um usuário<br />
		* @parm $construct
		* 
		*    
		*/
		function __construct($nome_servico,$descricao,$sla,$tipo_chamados_id,$id=null)
		{
			$this->id = $id;
			$this->nome_servico = $nome_servico;
			$this->descricao = $descricao;
			$this->sla = $sla;
			$this->tipo_chamados_id = $tipo_chamados_id;
		}	
			/** 
		* @summary Este método serve para buscar o id do usuário
		* @parm $GetIdUsuario
		* @see GetId()
		* @return id_usuario
		*/
		public function GetId()
		{
			return $this->id;
		}

		/** 
		* @summary Este método serve para buscar a senha do usuário
		* @parm $GetSenha
		* @return senha
		*    
		*/

		/** 
		* @summary Este método serve para buscar o nome do usuário
		* @parm $GetNomeServico
		* @return nome    
		*/
		public function GetNomeServico()
		{
			return $this->nome_servico;
		}

		public function GetDescricao()
		{
			return $this->descricao;
		}

		/** 
		* @summary Este método serve para buscar o salt do usuário
		* @parm $GetSalt
		* @return salt
		*    
		*/
		public function GetSla()
		{
			return $this->sla;
		}

		/** 
		* @summary Este método serve para buscar o status do usuário
		* @parm $GetStatus
		* @return status
		*    
		*/
		public function GetTipoChamadosId()
		{
			return $this->tipo_chamados_id;
		}	

	}
	
