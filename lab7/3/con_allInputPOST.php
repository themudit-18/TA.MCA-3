<?php
    echo "<h2>Retrieved using POST method:</h2>";
    echo "Name: " . htmlspecialchars($_POST['name'] ?? '') . "<br>";
    echo "Email: " . htmlspecialchars($_POST['email'] ?? '') . "<br>";
    echo "Date of Birth: " . htmlspecialchars($_POST['dob'] ?? '') . "<br>";
    echo "Phone Number: " . htmlspecialchars($_POST['phone'] ?? '') . "<br>";
    echo "Satisfaction Level: " . htmlspecialchars($_POST['satisfaction'] ?? '') . "<br>";
    echo "Gender: " . htmlspecialchars($_POST['gender'] ?? '') . "<br>";
    echo "Hobbies: " . htmlspecialchars(implode(", ", $_POST['hobbies'] ?? [])) . "<br>";
    echo "Course: " . htmlspecialchars($_POST['course'] ?? '') . "<br>";
    echo "Favorite Color: " . htmlspecialchars($_POST['favcolor'] ?? '') . "<br>";
?>