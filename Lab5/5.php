<?php

function sumOddElements($arr) {
    $sum = 0;
    foreach ($arr as $element) {
        if ($element % 2!= 0) {
            $sum = $sum+ $element;
        }
    }
    return $sum;
}

$arr = array(1, 3, 5, 7, 9);
echo "Sum of odd elements: ". sumOddElements($arr);

?>