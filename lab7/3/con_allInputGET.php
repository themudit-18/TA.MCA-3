<?php
    echo "<h2>Retrieved using GET method:</h2>";
    echo "Name: " . htmlspecialchars($_GET['name'] ?? '') . "<br>";
    echo "Email: " . htmlspecialchars($_GET['email'] ?? '') . "<br>";
    echo "Date of Birth: " . htmlspecialchars($_GET['dob'] ?? '') . "<br>";
    echo "Phone Number: " . htmlspecialchars($_GET['phone'] ?? '') . "<br>";
    echo "Satisfaction Level: " . htmlspecialchars($_GET['satisfaction'] ?? '') . "<br>";
    echo "Gender: " . htmlspecialchars($_GET['gender'] ?? '') . "<br>";
    // echo "Hobbies: " . implode(", ", $_GET['hobbies'] ?? []) . "<br>";
    echo "Course: " . htmlspecialchars($_GET['course'] ?? '') . "<br>";
    echo "Favorite Color: " . htmlspecialchars($_GET['favcolor'] ?? '') . "<br>";
    echo "Hobbies : ".implode(", ",$_GET['hobbies']);
?>