<?php

        for ($ano = 1980; $ano <= 2024; $ano++) {
            if ($ano % 4 == 0 and $ano % 100 != 0) {
                echo $ano . "\n";
            }

            else if ($ano % 4 == 0 and $ano % 400 == 0) {
                echo $ano . "\n";
            }
        }

?>
