<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number = 5;

        echo "using for loop <br>";
        for ($i=0; $i <= $number; $i++) { 
            echo $i."<br>";
        }

        echo "using while loop <br>";
        $a=0;
        while ($a <= $number) {
            echo $a."<br>";
            $a++;
        }

        echo "using do while loop <br>";
        $a=0;
        do {
            echo $a."<br>";
            $a++;
        } while ($a <= $number);
    ?>
</body>
</html>