<?php
    $array = [12, 3, 5, 7, 19, 1, 21, 25, 17];
    $k = 3; 
    
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = 0; $j < count($array) - 1 - $i; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    
    $kthSmallest = $array[$k - 1];
    
    $kthLargest = $array[count($array) - $k];
    
    echo "The {$k}th smallest number is: {$kthSmallest}\n";
    echo "The {$k}th largest number is: {$kthLargest}\n";
?>