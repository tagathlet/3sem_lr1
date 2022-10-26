<?php
	session_start();
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



<?php
    //Проверяем, если пользователь не авторизован, то выводим форму регистрации, 
    //иначе выводим сообщение о том, что он уже зарегистрирован
    if(!isset($_SESSION["password"])){
?>

		<!DOCTYPE html>
		<html>
			<head>
				<title>lr1</title>
				<meta charset="utf-8">
			</head>
			<body>
				<div id="header">
					<form action="signup.php" method="get">
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
								<td><label for="rep_pass">Repeat Password:</label></td>
								<td><input id="repeat_password" type="password" name="repeat_password" required="required"></td>
							</tr>
						  
							<tr>
								<td></td>
								<td align="right"><input type="submit" value="signup" name="signup"></td>
							</tr>
						</table>
					</form>
				</div>
<?php
    }else{
?>
        <div id="authorized">
            <h2>Вы уже зарегистрированы</h2>
        </div>
<?php
    }
?>