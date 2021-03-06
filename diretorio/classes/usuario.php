<?php 

	class Usuario {

		private $id_usuario;
		private $nome;
		private $senha;
		private $dataCadastro;



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

		public static function getList(){
			
			$dao = new DAO();

			return $dao->select("SELECT * FROM tb_usuario order by id_usuario");
		}

		public static function getSearch($busca){
			$dao = new DAO();

			return $dao->select("SELECT * FROM tb_usuario WHERE nome LIKE :SEARCH", array(':SEARCH'=>"%".$busca."%"));
		}

		public function logon ($login, $password){
			
			$dao = new DAO();

			$usuario_logar = $dao->select("SELECT * FROM tb_usuario WHERE nome = :LOGIN AND senha = :PASSWORD", array(
				":LOGIN"=>$login,
				":PASSWORD"=>$password
				));

			if (count($usuario_logar) > 0){
				
				$row = $usuario_logar[0];

				$this->setId_usuario($row['id_usuario']);
				$this->setNome($row['nome']);
				$this->setSenha($row['senha']);
				$this->setDataCadastro(new DateTime($row['data_cadastro']));
			}
			else {
				throw new Exception("Login ou senha inválido. ");
				
			}
		}

		public function inserir(){
			
			$dao = new DAO();

			$usuario = $dao->query("INSERT INTO tb_usuario (nome,senha, data_cadastro) VALUES (:NOME, :SENHA, :DATA)", array(
				":NOME"=>$this->getNome(),
				":SENHA"=>$this->getSenha(),
				":DATA"=>$this->getDatacadastro()
				)
			);
		}


		public function atualizar(){

			$dao = new DAO();

			$dao->query("UPDATE tb_usuario SET nome = :NOME, senha = :SENHA WHERE id_usuario = :ID", array(
				':NOME'=>$this->getNome(),
				':SENHA'=>$this->getSenha(),
				':ID'=>$this->getId_usuario()
			));
		}


		public function deletar() {
			
			$dao = new DAO();

			$dao->query("DELETE FROM tb_usuario WHERE id_usuario = :ID",array(':ID'=>$this->getId_usuario()
				));
		}

		public function deletarPorNome(){

			$dao = new DAO();

			$dao->query("DELETE FROM tb_usuario WHERE nome LIKE :NOME", array(':NOME'=>$this->getNome()));
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

		public function getDatacadastro (){
			return $this->dataCadastro;
		}

		public function setDatacadastro($data){
			$this->dataCadastro = $data;
		}
	}
 ?>