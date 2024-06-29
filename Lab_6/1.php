<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sum($n) {
        if ($n == 0) {
            return 0;
        }
        return $n + sum($n - 1);
    } 

    $n = 5;
    $result = sum($n);
    echo "The sum of the first $n numbers is: $result";
    ?>
</body>
</html>