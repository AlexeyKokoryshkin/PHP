<?
session_start();

if(isset($_GET['success'])) {
	echo "<h1>Вы авторизованы!</h1>";
}
else { ?>

<form action="server.php" method="POST">
	<p>Введите логин</p>
	<input type = "text" name = "login" value = <?=$_SESSION['login']?> >
	<p>Введите пароль</p>
	<input type = "password" name = "pass" value = <?=$_SESSION['pass']?> > 
	<br><br>
	<input type="submit" value="Войти">
</form>

<? } ?>