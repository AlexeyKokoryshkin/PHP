<?php
// print_r($_POST);

//Фильтрация ввода данных
$fio = (isset($_GET['fio']) ? strip_tags($_GET['fio']) : '');
$id = (int)($_GET['id']);

//Капча
if ($_POST['answer'] === $_POST['z']) {
	//print_r($_FILES);
	for ($i=0; $i<count($_FILES['photo']['name']); $i++ ) {
		$path = "files/" .$_FILES['photo']['name'][$i];
		if(move_uploaded_file($_FILES['photo']['tmp_name'][$i], $path)) {
			echo "Файл " .$_FILES['photo']['name'][$i] ." сохранен!" ."<br>";
		}
		else {
			die("Файл " .$_FILES['photo']['name'][$i] ." не сохранен!" ."<br>");
		}
	}
}
	else {
		echo "Доступ закрыт";
	}