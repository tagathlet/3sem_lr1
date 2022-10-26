<?php
	
	require_once("login_lib.php");
	
	if (check_login()){
		echo 'Hello, ', $_SESSION["user_login"];
	}
	else{
		echo 'forbidden';
		exit();
	}
?>

<button type="button" onClick='location.href="signoff.php"'>logout</button>