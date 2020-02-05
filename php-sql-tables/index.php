<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="./files/styles/style.css">
    </head>
    <body>
        <div class="grid">
            <header>здесь шапка сайта</header>
            <nav>
                <ul>
                    <li>
                        <a href="#">главная</a>
                    </li>
                    <li>
                        <a href="#">каталог</a>
                    </li>
                    <li>
                        <a href="#">партнерам</a>
                    </li>
                    <li>
                        <a href="#">о компании</a>
                    </li>
                    <li>
                        <a href="#">контакты</a>
                    </li>
                </ul>
            </nav>
            <main>
                <h1>Главная</h1>
                <div>

                	<?php
						include "./blocks/content.php"
					?>

						<br><br>

					<script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
					<script>
						const f = (id_good) => {
							let id_price = "#price_" + id_good;
							let price = $(id_price).val();
							$.ajax({
								method: "POST",
								url: "server.php",
								data: {id: id_good, p: price}
							}).done(function(answer) {
								alert(answer);
							});
						}
					</script>

					<?php
						include "config.php";

						$sql = "select * from shop";
						$form = "<table border='1' width='400'><tr><th>Название авто</th><th>Стоимость авто</th><th>Сохранить</th></tr>";
						$res = mysqli_query($connect, $sql);
						while($data = mysqli_fetch_assoc($res)) {
							$form .= "<tr>
										<td>" . $data['title'] . "</td>
										<td><input id='price_".$data['id']."' value=".$data['price']."></td>
										<td><button onclick='f(".$data['id'].")'>ОК</button></td>
									  </tr>";
						}
						$form .= "</table>";

						echo $form;
					?>

                </div>
            </main>
            <aside>
                <h2>Облако тегов</h2>
                <a href="#">#оборудование</a><br>
                <a href="#">#поставки</a><br>
                <a href="#">#обслуживание</a><br>
                <a href="#">#гарантия</a>
            </aside>
            <div class="voting">
                <form action="server.php" method="POST" enctype="multipart/form-data">
                	<p>Выбирите файл</p>
                	<input type="file" name="photo" accept="image/*"> <br><br>
                	<input type="submit" value="Загрузить">
                </form>
            </div>
            <footer>
                &copy; все права защищены
            </footer>
        </div>
    </body>
</html>