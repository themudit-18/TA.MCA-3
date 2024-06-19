<?php

        $percentage = 85;

        switch(true) {
            case $percentage < 40:
                echo "Percentage: $percentage% - Result: You Got Fail";
                break;
            case $percentage >= 40 && $percentage < 50:
                echo "Percentage: $percentage% - Result: You Got Pass Class";
                break;
            case $percentage >= 50 && $percentage < 60:
                echo "Percentage: $percentage% - Result: You Got Second Class";
                break;
            case $percentage >= 60 && $percentage < 70:
                echo "Percentage: $percentage% - Result: You Got First Class";
                break;
            case $percentage>=70:
                echo "Percentage: $percentage% - Result: You Got Distinction";
                break;
            default:
                echo "Percentage: $percentage% - Result: You Got Distinction";
        }
?>
