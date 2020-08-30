<?php
$myArray = [
	1 => ["Декабрь", 'Январь', 'Февраль'],
	2 => [1 => 'Март', 'Апрель', 'Май'],
	3 => [1 => 'Июнь', 'Июль', "Август"],
	4 => [1 => "Сентябрь", "Октябрь", "Ноябрь"]
];

function seasons (int $n) {
    switch ($n) {
      case 1: return 'Зима';
      case 2: return 'Весна';
      case 3: return 'Лето';
      case 4: return 'Осень';

    }
}

for (;;;) {}

array_slice($myArray, -2, 2);


$translit = ['н'=>'n', 'л'=>'l', 'а'=>'&*#'];
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
	<div class="row">

<?php foreach ($myArray as $key_season => $season): ?>
<div class="dropdown open m-3">
    <a class="btn btn-secondary dropdown-toggle" href="http://example.com" id="dropdownMenuLink" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
        <?=seasons($key_season)?>
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

			<?php foreach ($season as $key => $month):?>
        <a class="dropdown-item" href="/months/<?=$key_season?>-<?=$key?>.png"><?=strtr($month, $translit)?></a>
     <?php endforeach;?>

    </div>


</div>

<?php endforeach;?>
</div></div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
