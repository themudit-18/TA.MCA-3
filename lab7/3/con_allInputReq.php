<?php
    echo "<h2>Retrieved using REQUEST method:</h2>";
    echo "Name: " . htmlspecialchars($_REQUEST['name'] ?? '') . "<br>";
    echo "Email: " . htmlspecialchars($_REQUEST['email'] ?? '') . "<br>";
    echo "Date of Birth: " . htmlspecialchars($_REQUEST['dob'] ?? '') . "<br>";
    echo "Phone Number: " . htmlspecialchars($_REQUEST['phone'] ?? '') . "<br>";
    echo "Satisfaction Level: " . htmlspecialchars($_REQUEST['satisfaction'] ?? '') . "<br>";
    echo "Gender: " . htmlspecialchars($_REQUEST['gender'] ?? '') . "<br>";
    echo "Hobbies: " . htmlspecialchars(implode(", ", $_REQUEST['hobbies'] ?? [])) . "<br>";
    echo "Course: " . htmlspecialchars($_REQUEST['course'] ?? '') . "<br>";
    echo "Favorite Color: " . htmlspecialchars($_REQUEST['favcolor'] ?? '') . "<br>";
?>