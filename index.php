<?php 

	
	require_once ("config.php");

//ATUALIZAR USUARIO
	/*
	$atualize = new Usuario();

	$atualize->setNome("Mariana");
	$atualize->setSenha("mariii");
	$atualize->setId_usuario(65);

	$atualize->atualizar();
*/
$hoje = date('Y-m-d');
//echo $hoje;

//	$deletar = new Usuario();

//	$deletar->setId_usuario(74);

//	$deletar->deletar();


	//INSERIR USUÁRIO

//	/*
	$usuario = new Usuario();

	$usuario->setNome("Carol");
	$usuario->setSenha("jornal");
	$usuario->setDatacadastro($hoje);

	$usuario->inserir();
	//*/


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


	//DELETAR POR NOME

/*
	$deletar = new Usuario();

	$deletar->setNome("Moisés");

	$deletar->deletarPorNome();

*/
 ?>