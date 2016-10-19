<?php 
	
	mb_internal_encoding("UTF-8");
	$login = $_POST['_login'];
	$password = $_POST['_password'];
	
	$TryLogin = "admin";
	$TryPassword = "0000";
		
	if($login == $TryLogin && $password == $TryPassword)
	{
		print "Вы хацкер?";
	}
?>