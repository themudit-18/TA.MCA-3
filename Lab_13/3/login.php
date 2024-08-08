<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mca-3";


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
        if (isset($_POST['remember_me'])) {
            setcookie('loggedIn', true, time() + (86400 * 30), "/"); 
            setcookie('username', $name, time() + (86400 * 30), "/");
        }
        session_start();
        $_SESSION['username'] = $name;
        echo "Login Success!<br>";
        echo "<a href='logout.php'>Logout</a>"; 
        exit;
    } 
    else
    {
        echo "<h1>"."Please Check Your Name And Password"."</h1>";
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
    <label for="remember_me">Remember Me:</label>
    <input type="checkbox" id="remember_me" name="remember_me" <?php echo isset($_COOKIE['loggedIn']) ? 'checked' : ''; ?>><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>
