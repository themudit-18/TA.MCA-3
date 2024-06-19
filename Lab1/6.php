<?php

$number = 12321; 

$originalNumber = $number;
$reversedNumber = 0;

while ($number > 0) {
    $digit = $number % 10;
    $reversedNumber = $reversedNumber * 10 + $digit;
    $number = (int)($number / 10);
}

if ($originalNumber == $reversedNumber) {
    echo "$originalNumber is a palindrome.";
} else {
    echo "$originalNumber is not a palindrome.";
}

?>
