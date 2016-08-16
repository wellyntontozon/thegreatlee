<?php 
	/**
	* 
	*/
	class ChamadosVo{
		private $id_chamado;
		private $resumo;
		private $descricao;
		private $data_criacao;
		private $data_limite;
		private $data_termino;
		private $status;
		private $servicos_id;
		private $matricula;

		function __construct($resumo=null,$matricula=null, $descricao=null, $status=null, $servicos_id=null,$data_criacao=null,$data_limite=null, $data_termino=null, $id_chamado=null)
		{
			$this->id_chamado = $id_chamado;
			$this->resumo = $resumo;
			$this->descricao = $descricao;
			$this->data_criacao = $data_criacao;
			$this->data_termino = $data_termino;
			$this->data_limite = $data_limite;
			$this->status = $status;
			$this->servicos_id = $servicos_id;
			$this->matricula = $matricula;
		}
		public function GetIdChamado()
		{
			return $this->id_chamado;
		}

		public function GetResumo()
		{
			return $this->resumo;
		}

		public function GetDescricao()
		{
			return $this->descricao;
		}

		public function GetDataCriacao()
		{
			return $this->data_criacao;
		}

		public function GetDataTermino()
		{	
			return $this->data_termino;
		}

		public function GetDataLimite()
		{
			return $this->data_limite;
		}

		public function GetStatus()
		{
			return $this->status;
		}

		public function GetServicoId()
		{
			return $this->servicos_id;
		}

		public function GetMatricula()
		{
			return $this->matricula;
		}

	}
?>