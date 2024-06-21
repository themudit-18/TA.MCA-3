<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //multidimensional numeric array
    $multiArray = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );

      $numRows = count($multiArray);
      for ($i = 0; $i < $numRows; $i++) {
          for ($j = 0; $j < count($multiArray[$i]); $j++) {
              echo $multiArray[$i][$j] . "<br>";
          }
          echo "<br>";
      }  

    echo "-----------------------------<br>";
    //multidimension associative array
    $multiArray = array(
        array(
            "name" => "John",
            "age" => 30,
            "city" => "New York"
        ),
        array(
            "name" => "Jane",
            "age" => 25,
            "city" => "Los Angeles"
        ),
        array(
            "name" => "Doe",
            "age" => 35,
            "city" => "Chicago"
        )
    );

    for ($i = 0; $i < count($multiArray); $i++) {
        $keys = array_keys($multiArray[$i]);
        
        for ($j = 0; $j < count($keys); $j++) {
            $key = $keys[$j];
            $value = $multiArray[$i][$key];
            echo $key . ": " . $value . "<br>";
        }
        echo "-----<br>";
    }
    

    ?>
</body>
</html>