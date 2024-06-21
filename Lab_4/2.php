<?php
        $car = array(
            "brand"=>"Ford", 
            "model"=>"Mustang", 
            "year"=>1964
        );

        $keys = array_keys($car);

        for ($i=0; $i < count($keys); $i++)
        { 
            $key = $keys[$i];
            $value = $car[$key];
            echo "$key : $value <br>";
        }
?>   