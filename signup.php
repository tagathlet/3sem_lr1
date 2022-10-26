<?php

    require_once("dbconnect.php");
    require_once("login_lib.php");
	
	$_SESSION["error_messages"] = '';
	$_SESSION["success_messages"] = '';

	if(isset($_GET["signup"]) && !empty($_GET["signup"])){
	
		$res = $mysqli->query("SELECT login FROM `users` WHERE login = '".$_GET["login"]."'");
		
		if ($res->num_rows > 0){
			#echo 'login ', $_GET["login"], ' уже есть';
			
			$_SESSION["error_messages"] .= "<p>Логин уже есть</p>";
			
			rederect("signup_form.php");
			
			exit();
			
		}
		else if ($_GET["password"] != $_GET["repeat_password"]) {
			
			$_SESSION["error_messages"] .= "<p>Пароли не совпадают</p>";
			rederect("signup_form.php");
			
			exit();
		}
		else {
			echo 'OK';
			$result_query_insert = $mysqli->query("INSERT INTO `users` (login, password) VALUES ('".$_GET["login"]."', '".password_hash($_GET["password"], PASSWORD_DEFAULT)."')");
			$mysqli->close();
		}
	}
	else{
		exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
	}
	
?>