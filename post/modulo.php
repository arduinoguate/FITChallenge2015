<?php
	session_start();
	include '../config/config.php';
	
	$usuario->fetch_id(array("username" => $_SESSION['username']));
	$usuario->columns['id_modulo'] = $_POST['modulo'];
	$usuario->columns['updated_at'] = date("Y-m-d H:i:s");
	if (!$usuario->update()){
		header("location:control.php?error=WHAT");
	}

	//header("location:../control.php");

?>
