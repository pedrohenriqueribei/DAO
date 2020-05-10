<?php 

	class Usuario {

		private $id_usuario;
		private $nome;
		private $senha;
		private $dt_cadastro;



		public function loadById($id){
			$dao = new DAO();

			$results = $dao->select("SELECT * FROM tb_usuario WHERE id_usuario = :ID", array(":ID"=>$id));

			if (count($results) > 0){
				
				$row = $results[0];

				$this->setId_usuario($row['id_usuario']);
				$this->setNome($row['nome']);
				$this->setSenha($row['senha']);
				$this->setDataCadastro(new DateTime($row['data_cadastro']));
			}
		}

		public function __toString (){
			return json_encode(array(
				"id_usuario"=>$this->getId_usuario(),
				"nome"=>$this->getNome(),
				"senha"=>$this->getSenha(),
				"data_cadastro"=>$this->getDataCadastro()->format("d/m/Y H:i:m")
			));	
		}



		public function getId_usuario(){
			return $this->id_usuario;
		}

		public function setId_usuario($id) {
			$this->id_usuario = $id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($name){
			$this->nome = $name;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($pass){
			$this->senha = $pass;
		}

		public function getDataCadastro (){
			return $this->dt_cadastro;
		}

		public function setDataCadastro($data){
			$this->dt_cadastro = $data;
		}
	}
 ?>