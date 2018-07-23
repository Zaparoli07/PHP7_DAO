<?php  
	
	require_once("config.php");

	
	$root = new Users();
 
	$root -> loadbyId(3);

	echo $root;


	/*
	$sql = new Sql();

	$usuarios = $sql -> select("SELECT * FROM USERS");

	echo json_encode($usuarios);

	*/

?>