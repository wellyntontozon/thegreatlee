<?php  
	//VO = Value Obj
	Class UsuarioVo{
		Private $id_usuario;
		Private $nome;
		Private $senha;
		Private $salt;
		Private $status;

		/** 
		* @summary Este método serve para alterar todos os atributos de um usuário<br />
		* @parm $construct
		* 
		*    
		*/
		function __construct($nome,$senha,$salt=null,$id_usuario=null,$status=null)
		{
			$this->id_usuario = $id_usuario;
			$this->nome = $nome;
			$this->senha = $senha;
			$this->salt = $salt;
			$this->status = $status;
		}	
			/** 
		* @summary Este método serve para buscar o id do usuário
		* @parm $GetIdUsuario
		* @see GetNome()
		* @return id_usuario
		*/
		public function GetIdUsuario()
		{
			Return $this->id_usuario;
		}

		/** 
		* @summary Este método serve para buscar a senha do usuário
		* @parm $GetSenha
		* @return senha
		*    
		*/

		/** 
		* @summary Este método serve para buscar o nome do usuário
		* @parm $GetNome
		* @return nome    
		*/
		public function GetNome()
		{
			Return $this->nome;
		}

		public function GetSenha()
		{
			Return $this->senha;
		}

		/** 
		* @summary Este método serve para buscar o salt do usuário
		* @parm $GetSalt
		* @return salt
		*    
		*/
		public function GetSalt()
		{
			Return $this->salt;
		}

		/** 
		* @summary Este método serve para buscar o status do usuário
		* @parm $GetStatus
		* @return status
		*    
		*/
		public function GetStatus()
		{
			Return $this->status;
		}	

	}
	
