<?php

function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: Division by zero";
    }
}

function calculator($num1, $num2, $operator) {
    switch($operator) {
        case "add":
            return add($num1, $num2);
        case "subtract":
            return subtract($num1, $num2);
        case "multiply":
            return multiply($num1, $num2);
        case "divide":
            return divide($num1, $num2);
        default:
            return "Error: Invalid operator";
    }
}

$num1 = 10;
$num2 = 2;
$operator = "add";

$result = calculator($num1, $num2, $operator);
echo "Result: $result";
echo"<br/>";

$operator = "subtract";
$result = calculator($num1, $num2, $operator);
echo "Result: $result";
echo"<br/>";

$operator = "multiply";
$result = calculator($num1, $num2, $operator);
echo "Result: $result";
echo"<br/>";

$operator = "divide";
$result = calculator($num1, $num2, $operator);
echo "Result: $result";

?>