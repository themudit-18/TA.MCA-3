
    <?php
    $arr = array("hello","hii","okk");

    echo count($arr)."<br>";

    echo "<br>shift = ".array_shift($arr)."<br>";
    echo "after array shift :";
    foreach ($arr as $value) {
        echo "\n".$value."\n";
    }

    echo "<br><br> pop = ".array_pop($arr)."<br>";
    echo "after array pop :";
    foreach ($arr as $value) {
        echo "\n".$value."\n";
    }

    echo "<br><br> unshift = ".array_unshift($arr,"how")."<br>";
    echo "after array unshift :";
    foreach ($arr as $value) {
        echo "\n".$value."\n";
    }

    echo "<br><br> push = ".array_push($arr,"end")."<br>";
    echo "after array element push : ";
    foreach ($arr as $value) {
        echo "\n".$value."\n";
    }

    echo "<br><br>after sorted array : ";
    echo sort($arr,SORT_STRING)."<br>";
    foreach ($arr as $value) {
        echo "\n".$value."\n";
    }

    echo "<br><br>after reverse sorted array : ";
    echo rsort($arr,SORT_STRING)."<br>";
    foreach ($arr as $value) {
        echo "\n".$value."\n";
    }

    echo "<br><br>after shuffle array : ";
    echo sort($arr)."<br>";
    foreach ($arr as $value) {
        echo "\n".$value."\n";
    }

    $arr2 = array("first","second");

    $newarr = array_merge($arr,$arr2);
    echo "<br><br>after merge array : ";
    foreach ($newarr as $value) {
        echo "\n".$value."\n";
    }

    ?>