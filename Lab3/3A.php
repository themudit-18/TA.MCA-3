<?php
    $size = 5;
    for($i = 0; $i < $size; $i++) {
        for($j = 0; $j < $size - $i - 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($k = 0; $k < 2 * $i + 1; $k++) {
            if($i === 0 || $i === $size - 1) {
                echo "*";
            }
            else {
                if($k === 0 || $k === 2 * $i) {
                    echo "*";
                }
                else {
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
?>