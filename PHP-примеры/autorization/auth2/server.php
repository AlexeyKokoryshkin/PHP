<?
session_start();
$connect = mysqli_connect("localhost","root","","shop") or die("Ошибка соеденения!");

$salt="dfsdsjfdlkjf-3242d";

$login = (!empty($_POST['login']))?strip_tags($_POST['login']):"";
$pass = (!empty($_POST['pass']))?strip_tags($_POST['pass']):"";

$pass = md5($pass) .$salt;

$sql = "select * from users where login='$login' and pass='$pass' ";
$res = mysqli_query($connect,$sql) or die("Error: ".mysql_error($connect));

if(mysqli_num_rows($res)>0) {
	$_SESSION["login"]=$login;
	$_SESSION["pass"]=$pass; 
	header("Location:index.php?success");
}
else{
	die("Ошибка авторизации");
}

/* 
	update users set pass = md5(pass)
	SELECT md5(pass) FROM `users` WHERE login="admin"
*/