<?php
    $size = 5;
    for($i = 0; $i < $size; $i++) {
        for($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k < 2 * ($size - $i) - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
?>