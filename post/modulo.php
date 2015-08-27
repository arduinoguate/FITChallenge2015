<?php
	include '../config/config.php';

	$usuario->columns['id_modulo'] = $_POST['modulo'];
	if (!$usuario->update()){
		header("location:control.php?error=WHAT");
	}

	header("location:../control.php");

?>
