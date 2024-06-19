<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = 10; 

        $fib1 = 0;
        $fib2 = 1;

        echo "Fibonacci series up to $n numbers:\n";

        if ($n >= 1) {
            echo $fib1 . " ";
        }

        if ($n >= 2) {
            echo $fib2 . " ";
        }

        for ($i = 3; $i <= $n; $i++) {
            $fib3 = $fib1 + $fib2;
            echo $fib3 . " ";
            
            $fib1 = $fib2;
            $fib2 = $fib3;
        }

        echo "\n";
    ?>
</body>
</html>