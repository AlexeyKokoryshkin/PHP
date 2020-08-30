<?php
    $i = 1;
    while ($i < 10) {
        $i++;
        echo "step {$i}". PHP_EOL;
    }
?>

<?php
    for ($i = 1; $i <10; $i++) {
        echo "step {$i}". PHP_EOL;
        for ($j = 0; $j < $i; $j++) {
            echo "top". PHP_EOL;
        }
    }