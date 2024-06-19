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

        echo "using for loop <br>";
        for ($i=0; $i <= $number; $i++) { 
            if ($i%2!=0) {
                echo $i."<br>";
            }
        }

        echo "using while loop <br>";
        $a=0;
        while ($a <= $number) {
            if ($a%2!=0) {
                echo $a."<br>";
            }
            $a++;
        }

        echo "using do while loop <br>";
        $b=0;
        do {
            if ($b%2!=0) {
                echo $b."<br>";
            }
            $b++;
        } while ($b <= $number);
    ?>
</body>
</html>