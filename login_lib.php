<?php
	session_start();

	function check_login(){
		return $_SESSION["token"] == $_COOKIE["token"];
	}

	function rederect($address){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".$address."");
	}
?>