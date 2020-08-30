<?php
  
    function test($a) {
        
        echo $a--. ' ';
        if ($a < 1) {
            return;
        }

        test($a);

      //  echo $a--. ' ';
    }

    test(10);
