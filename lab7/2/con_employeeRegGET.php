<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $password = isset($_GET['password']) ? $_GET['password'] : '';
        
        echo "<h2>Retrieved using GET method:</h2>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "password: " . htmlspecialchars($password) . "<br>";
    }
?>