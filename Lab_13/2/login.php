<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bca-3";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE name='$name' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['username'] = $name;
        echo "Login Success!<br>";
        echo "<a href='logout.php'>Logout</a>"; // Logout link
        exit;
    }
    else
    {
        echo "Enter Valid name or paass";
    } 
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<h2>Login Form</h2>
<form method="post" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>
