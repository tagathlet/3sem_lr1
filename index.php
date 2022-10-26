<?php
    require_once("login_lib.php");
	
	if (check_login()){
		rederect("content.php");
		
		exit();
	}
?>


<div>
    <?php
        //Если в сессии существуют сообщения об ошибках, то выводим их
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        //Если в сессии существуют радостные сообщения, то выводим их
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>


<!DOCTYPE html>
<html>
    <head>
        <title>lr1</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div id="header">
            <form action="signin.php" method="get">
				<table>
					
					<tr>
						<td><label for="name">Login:</label></td>
						<td><input id="login" type="text" name="login" required="required"></td>
					</tr>
				  
					<tr>
						<td><label for="pass">Password:</label></td>
						<td><input id="password" type="password" name="password" required="required"></td>
					</tr>
				  
					<tr>
						<td><button type="button" onClick='location.href="signup_form.php"'>signup</button></td>
						<td><input type="submit" value="signin" name="signin"></td>
					</tr>
				</table>
			</form>
        </div>