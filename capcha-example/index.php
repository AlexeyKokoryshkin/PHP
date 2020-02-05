<?php
	$x = rand(1,10);
	$y = rand(1,10);
	$z = $x * $y;
?>

<form action="server.php" method="POST" enctype="multipart/form-data">

	<input type="hidden" value="<?=$z?>" name="z">

	<p>Ваше имя</p>
	<input type="text" name="fio">
	<p>Расскажите о себе</p>
	<textarea name="biogr" id="" cols="30" rows="10"></textarea>
	<p>Какие языки знаете?</p>
	<input type="checkbox" name="lang[]" value="PHP">PHP<br>
	<input type="checkbox" name="lang[]" value="JS">JS<br>
	<input type="checkbox" name="lang[]" value="Java">Java<br>

	<p>Ваш город</p>
	<input type="radio" name="city" value="Москва">Москва<br>
	<input type="radio" name="city" value="Новосибирск">Новосибирск<br>
	<input type="radio" name="city" value="Воронеж">Воронеж<br>

	<p>Ваша дата рождения</p>
	<input type="date" name="dr">

	<p>Вычислите выражение: <?=$x?> * <?=$y?> = <input type="text" name="answer" style="width:30px"> </p>

	<p>Выбирете файлы для загрузки на сервер</p>
	<input type="file" name="photo[]" multiple>


	<input type="submit" value ="Сохранить">
</form>