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


	/*
	$sql = new Sql();

	$usuarios = $sql -> select("SELECT * FROM USERS");

	echo json_encode($usuarios);

	*/



?>