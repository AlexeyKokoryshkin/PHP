<?php

	 // Скрипт для загрузки фото файлов

	// $mas = ["image/jpeg", "image/png"];
	// if(in_array($_FILES['photo'][type], $mas)) {
	// 	$path = "files/" . $_FILES['photo']['name'];
	// 	if(move_uploaded_file($_FILES['photo'][tmp_name], $path)) {
	// 		echo $_FILES['photo']['name'] ." загружен";
	// 	}
	// 	else {
	// 		echo "Возникла ошибка при загрузке файла!";
	// 	}
	// }
	// else {
	// 	echo "Тип файла не допустим к загрузке!";
	// }
?>


<?php

	// Скрипт для работы с таблицей товаров

	include "config.php";
	//print_r($_POST);
	$sql = "UPDATE shop SET price=" .$_POST['p'] ." where id=" .$_POST['id'];
		if(mysqli_query($connect, $sql)) {
			echo "Данные сохранены";
		}
?>