<?php
    $arr = array(5,10,1,3,15);
    $n = count($arr);
    
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . " ";
    }
?>