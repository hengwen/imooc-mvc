<?php
	header("Content-type:text/html; charset=utf-8");
	session_start();
	require_once('config.php');
	require_once('framework/pc.php');
	require_once('libs/Controller/path.class.php');
	require_once('libs/Controller/filter.class.php');
	PC::run($config);
	


?>