<?php
	/**
	 * 调用生成验证码文件，并创建实例生成验证码和验证码会话
	 */
	session_start();
	require_once "framework/libs/core/verify.class.php";
	$verify = new verify(80,30,1,4,10,5);
	$image = $verify->verifyImage();
	$_SESSION['verify'] = $verify->chars;
?>