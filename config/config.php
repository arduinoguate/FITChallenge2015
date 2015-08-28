<?php
	include 'DB/DBManager.php';
	include 'DB/DataBase.class.php';

	$config = parse_ini_file("config.ini");

	$server = $config['server'];
	$db_user = $config['db_user'];
	$db_pass = $config['db_pass'];
	$db_database = $config['database'];

	$connection = new DataBase($server, $db_user, $db_pass, $db_database);

	$col_usuario = array('username', 'id_modulo', 'id_bot', 'created_at', 'updated_at');
	$key_usuario = array('username');
	$usuario = new DBManager($connection, 'usuario', $col_usuario, $key_usuario);

	$col_command = array('id', 'id_action', 'default_value', 'updated_at', 'id_usuario', 'type');
	$key_command = array('id');
	$command = new DBManager($connection, 'user_command', $col_command, $key_command);

	//$col_api_scopes = array('id_scope', 'id_client');
	//$key_api_scopes = array('id_scope', 'id_client');
	//$foreign_api_scopes = array('id_client' => array('api_users','client_id', $this->api_client), 'id_scope' => array('api_scopes','name', $this->scopes));
	//``$this->api_client_scopes = new DBManager($connection, 'api_scope_users', $col_api_scopes, $key_api_scopes, $foreign_api_scopes);


?>
