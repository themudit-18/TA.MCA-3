<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number = 10;
        $sum = 0;

        for ($i=0; $i <= $number; $i++) { 
            if ($i%2==0) {
                $sum += $i;
            }
        }
        echo "sum of even numbers = ".$sum."<br>";
    ?>
</body>
</html>