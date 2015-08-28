<?php
	session_start();
	include '../config/config.php';

	$usuario = $_SESSION['username'];
	$q_list = array();
	$q_list = $command->fetch("id_usuario = '$usuario'");
	if (count($q_list) > 0){
		foreach ($q_list as $q_item) {
			$q_item->delete();
		}
	}

	$command->columns['id'] = null;
	$command->columns['id_action'] = $_POST['a_izquierda'];
	$command->columns['default_value'] = $_POST['v_izquierda'];
	$command->columns['updated_at'] = date("Y-m-d H:i:s");
	$command->columns['id_usuario'] = $_SESSION['username'];
	$command->columns['type'] = 'L';
	$id = $command->insert();

	$command->columns['id'] = null;
	$command->columns['id_action'] = $_POST['a_derecha'];
	$command->columns['default_value'] = $_POST['v_derecha'];
	$command->columns['updated_at'] = date("Y-m-d H:i:s");
	$command->columns['id_usuario'] = $_SESSION['username'];
	$command->columns['type'] = 'R';
	$id = $command->insert();

	$command->columns['id'] = null;
	$command->columns['id_action'] = $_POST['a_arriba'];
	$command->columns['default_value'] = $_POST['v_arriba'];
	$command->columns['updated_at'] = date("Y-m-d H:i:s");
	$command->columns['id_usuario'] = $_SESSION['username'];
	$command->columns['type'] = 'U';
	$id = $command->insert();

	$command->columns['id'] = null;
	$command->columns['id_action'] = $_POST['a_izquierda'];
	$command->columns['default_value'] = $_POST['v_izquierda'];
	$command->columns['updated_at'] = date("Y-m-d H:i:s");
	$command->columns['id_usuario'] = $_SESSION['username'];
	$command->columns['type'] = 'D';
	$id = $command->insert();

	$command->columns['id'] = null;
	$command->columns['id_action'] = $_POST['a_izquierda'];
	$command->columns['default_value'] = $_POST['v_izquierda'];
	$command->columns['updated_at'] = date("Y-m-d H:i:s");
	$command->columns['id_usuario'] = $_SESSION['username'];
	$command->columns['type'] = 'S';
	$id = $command->insert();

	if (!$command->update()){
		header("location:control.php?error=WHAT");
	}

	header("location:../control.php");

?>
