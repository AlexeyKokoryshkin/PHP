<?php

    const AVANS = 30;
    const NDFL = 13;
    $oklad1 = 50000;
    $realAvans1 = 0;

    function giveMoney(int $oklad) {
        echo $oklad - calc(AVANS, $oklad) - calc(NDFL, $oklad) + fine(). "\n";
    }

    function giveMoneyNew(int $oklad, bool $isAvans=true) {
        $realAvans = ($isAvans) ? (AVANS) : ($isAvans=0);
        echo $oklad - calc($realAvans, $oklad) - calc(NDFL, $oklad) + fine(). "\n";
    }

    function giveMoneySuperNew(int $oklad, bool $isAvans=true) {
        global $realAvans1;
        if ($isAvans) {
            $realAvans1 = 50;
        }
        $realAvans = ($isAvans) ? (AVANS) : ($isAvans=0);
        echo $oklad - calc($realAvans, $oklad) - calc(NDFL, $oklad) + fine(). "\n";
    }
   
    function calc($value, $oklad) : int {
        return $value / 100 * $oklad;
    }

    function fine() : int {
       return mt_rand(-50, 50) * 100;
    }


    giveMoneyNew(25000,1);
    giveMoneySuperNew(25000,1);