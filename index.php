<?php 

	
	require_once ("config.php");

//ATUALIZAR USUARIO
	$atualize = new Usuario();

	$usuario->setNome("Mariana");
	$usuario->setSenha("mariii");
	$usuario->setId_usuario(14);

	$usuario->atualizar();





	//INSERIR USUÁRIO

	/*
	$usuario = new Usuario();

	$usuario->setNome("Maria");
	$usuario->setSenha("jose");

	$usuario->inserir();
	*/


//  LOGAR USUARIO

/*	$login = "Lay";
	$senha = "davi";

	$usuario = new Usuario();

	$usuario->logon($login, $senha);

	echo $usuario;
*/



	// buscar pela pesquisa
	//$busca = Usuario::getSearch("Jo");

	//echo json_encode($busca);


	//carregar uma lista de usuários

	//$lista = Usuario::getList();

	//echo json_encode($lista);



/*  CARREGA UM USUÁRIO
	$user = new Usuario();

	$user->loadById(12);

	echo $user;
*/





/*
ANTIGO
AGORA ESTÁ USANDO A CLASSE USUARIO

	$dao = new DAO();

	$usuarios = $dao->SELECT("SELECT * FROM tb_usuario");

	echo json_encode($usuarios);
 */
 ?>