<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $start = 100; 
        $end = 999;  

        for ($num = $start; $num <= $end; $num++) {
            $sum = 0;
            $temp = $num;
            $numStr = (string)$num;
            $numDigits = strlen($numStr);

            for ($i = 0; $i < $numDigits; $i++) {
                $digit = (int)$numStr[$i];
                $sum = $sum + pow($digit, $numDigits);
            }

            if ($sum == $num) {
                echo $num . "<br>";
            }
        }

    ?>

</body>
</html>