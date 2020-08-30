<?php
//пример 1
    $valueA = rand(-213,213);
    $valueB = rand(-213,213);
    if ( $valueA > $valueB ) {
        echo "{$valueA} ". "больше ". "$valueB ". "\n";
    }
    elseif ($valueA == 0) {
        echo "{$valueA} ". "равна ". "$valueB ". "\n";
    }
    else {
        echo "{$valueA} ". "меньше ". "$valueB ". "\n";
    }
?>

<?php
//пример 2
    $speed = rand(30,90); //km-h
    $result = $speed - 60;
    echo ($speed > 60) ? ("Штраф! Вы превысили на ". "{$result}" . "\n") : ("Все ОК)". "\n");
