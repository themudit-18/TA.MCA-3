<?php
    $firstNumber = 100;
    $secondNumber = 500;
    $thirdNumber = 50;
    if($firstNumber>$secondNumber and $firstNumber>$thirdNumber)
    {
        echo "First Number Is Gretest Number";
    }
    elseif($secondNumber>$thirdNumber and $secondNumber>$firstNumber)
    {
        echo "Second Number Is Greatest Number";
    }
    elseif($thirdNumber>$firstNumber and $thirdNumber>$secondNumber)
    {
        echo "Third Number Is Greatest Number";
    }
    else{
        echo "Two Or More Than Two Numbers Are Equal";
    }
?>