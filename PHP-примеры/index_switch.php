<?php
    switch ($valueA = "4") {
        case 1:
            echo "кейс 1". "<\n>";
        break;
        case 2:
            echo "кейс 2". "<\n>";
        break;
        case 3:
            echo "кейс 3". "<\n>";
        break;
        case 4:
            echo "кейс 4". "<\n>";
        break;
        default:
            echo "нет совпадений" . "<\n>";
    }


    switch ($valueA = "осень") {
        case "весна":
            echo "месяц - весна". "<\n>";
        break;
        case "зима":
            echo "месяц - зима". "<\n>";
        break;
        case "осень":
            echo "месяц - осень". "<\n>";
        break;
        case "лето":
            echo "месяц - лето". "<\n>";
        break;
        default:
            echo "нет совпадений". "<\n>";
    }

    switch($beer = "heineken")
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Хороший выбор'. "<\n>";
    break;
    default;
        echo 'Пожалуйста, сделайте новый выбор...';
    break;
}