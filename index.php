<?php  
	
	require_once("config.php");

	/* ====CARREGA UM USUÁRIO====
	$root = new Users();
 
	$root -> loadbyId(3);

	echo $root;
	*/


	/* ====CARREGA TODOS OS USUÁRIOS====
	$lista = Users :: getList();

	echo json_encode($lista);
	*/

	/*====CARREGA UMA LISTA DE USUÁRIO PELO LOGIN====
	$search = Users :: search("Luiz");

	echo json_encode($search);
	*/

	/*====VALIDA LOGIN=====
	$usuario = new Users();
	$usuario -> login("Luiz", "123");
	echo $usuario;
	*/

	/*====INSERT USUÁRIO====
	$aluno = new Users();

	$aluno -> setDeslogin("aluno");
	$aluno -> setDessenha("123");

	$aluno -> insert();

	echo $aluno;
	*/

	/*====UPDATE USUÁRIO====
	$usuario = new Users();

	$usuario -> loadbyId(2);

	$usuario ->update("Professor", "123");

	echo $usuario;
	*/


	/*====DELETE USUÁRIO====
	$usuario = new Users();

	$usuario -> loadbyId(2);

	$usuario -> delete();

	echo $usuario;
	/*	


	/*
	$sql = new Sql();

	$usuarios = $sql -> select("SELECT * FROM USERS");

	echo json_encode($usuarios);

	*/



?>