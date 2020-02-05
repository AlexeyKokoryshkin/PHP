<?
session_start();

echo session_id();


?>
<script src="jquery.js"></script>
<script>
	function send(){
		let login = $("#login").val();
		let pass = $("#pass").val();
		let str = "login="+login+"&pass="+pass;
		$.ajax({
			type: "POST",
			url: "server.php",
			data: str,
			success: function(answer){
				$("h1").html(answer);
			}
		});
	}

</script>
<h1 style="color:red;"></h1>
	<p>Введите логин</p>
	<input type="text" id="login" value=<?=$_SESSION['login']?>>
	<p>Введите пароль</p>
	<input type="password" id="pass" value=<?=$_SESSION['pass']?>><br><br>
	
	<input type="button" onclick="send()" value="Войти">
