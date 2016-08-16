<?php 
	Class TipoChamadoVo{
		Private $id;
		Private $tipo_nome;

		function __construct($tipo_nome, $id=null){
			$this->id = $id;
			$this->tipo_nome = $tipo_nome;
		}

		public function GetId()
		{
			return $this->id;
		}

		public function GetTipoNome()
		{
			return $this->tipo_nome;
		}	
	}
?>