<?php

    require_once("dbconnect.php");
	require_once("login_lib.php");

	if(isset($_GET["signin"]) && !empty($_GET["signin"])){
		$res = $mysqli->query("SELECT login, password FROM `users` WHERE login = '".$_GET["login"]."'");
		
		if ($res->num_rows > 0){
			while ($row = $res->fetch_assoc()){
				if ($row["login"] == $_GET["login"]){
					if (password_verify($_GET["password"], $row["password"])){
						echo "Hellow, ", $_GET["login"];
						$token = $row["password"];
						setcookie("token", $token);
						$_SESSION["token"] = $token;
						$_SESSION["user_login"] = $_GET["login"];
						
						rederect("content.php");
					}
					else {
						$_SESSION["error_messages"] = "<p>Wrong password</p>";
						rederect("index.php");
						echo 'Wrong password';
					}
				}
			}
		}
		else {
			$_SESSION["error_messages"] = "<p>Wrong login</p>";
			rederect("index.php");
			echo 'Wrong login';
		}
		$mysqli->close();
	}
	else {
		exit("<p><strong>Ошибка!</strong> Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете перейти на <a href=".$address_site."> главную страницу </a>.</p>");
	}
?>