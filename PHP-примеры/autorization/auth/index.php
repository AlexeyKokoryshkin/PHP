<?php

if(isset($_GET['success'])):?>
	<h1>Вы успешно авторизованы!</h1>
<?php
	endif;
?>

<form action="server.php" method="post">
	<p>Введите логин</p>
	<input value="<?=$_COOKIE['login']?>" type="text" name="login"></br>
	<p>Введите пароль</p>
	<input value="<?=$_COOKIE['pass']?>" type="password" name="pass"></br>
	<input type="submit" value="Войти">
</form>