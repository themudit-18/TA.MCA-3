<?php
$n = 5;

for ($i = 0; $i < $n; $i++) {
    for ($j = $i; $j < $n - 1; $j++) {
        echo "&nbsp;&nbsp;";
    }

    $number = 1;
    for ($k = 0; $k <= $i; $k++) {
        echo $number . "&nbsp;&nbsp;";
        $number = $number * ($i - $k) / ($k + 1);
    }
    echo "<br/>";
}
?>
