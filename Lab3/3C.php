<?php
$n = 5;

for ($i = 0; $i < $n; $i++) {
    for ($k = 0; $k < $i; $k++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = $i + 1; $j <= $n; $j++) {
        echo $j . "&nbsp;&nbsp;";
    }
    echo "<br/>";
}


for ($i = $n - 2; $i >= 0; $i--) {
    for ($k = 0; $k < $i; $k++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = $i + 1; $j <= $n; $j++) {
        echo $j . "&nbsp;&nbsp;";
    }
    echo "<br/>";
}
?>
