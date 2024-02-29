<?php
    function check($num) {
        if ($num % 2 == 0) {
            echo "$num é par.\n\n";
            return true;
        } 
        
        else {
            echo "$num é ímpar.\n\n";
            return false;
        }
    }

    while(true) {
        $num = readline("Insira um número: ");
        check($num);
    }
?>