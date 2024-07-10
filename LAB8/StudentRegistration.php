<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);

    if (empty($name)) {
        $errors['name'] = 'Name is required';
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
            $errors['name'] = "Only letters and white space allowed";
        }
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
        }
    }

    if (empty($age)) {
        $errors['age'] = 'age is required';
    } else {
        if (!filter_var($_POST["age"], FILTER_VALIDATE_INT)) {
            $errors['age'] = "Invalid age format";
        } else {
            $age = (int)$_POST["age"];
            if ($age < 1 || $age > 120) {
                $errors['age'] = "Age must be between 1 and 120";
            }
        }
    }

    if (empty($errors)) {
        echo "Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <style>
        .container{
            background-color: aqua;
            padding: 10px;
            margin: auto 500px;
            margin-top: 20px;
        }

        h1{
            text-align: center;
        }

        form{
            padding: 15px 0;
            background-color: rgb(196, 227, 164);
        }

        input[type="text"], label{
            display: block;
            margin: 0 auto;
            width: 250px;
        }

        input[type="submit"]{
            display: block;
            margin: 0 auto;
            width: 100px;
            border-radius: 10px;
            background-color: rgb(169, 96, 238);
            color: azure;
        }
    </style>
</head>
<body>
    <h1>Student Registration Form</h1>
    <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
        <span style="color: red;"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="Enter Your Email" required>
        <span style="color: red;"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>
        <br><br>

        <label for="age">Age:</label>
        <input type="text" name="age" id="age" placeholder="Enter Your Age" required>
        <span style="color: red;"><?php echo isset($errors['age']) ? $errors['age'] : ''; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Register">
    </form>
    </div>
</body>
</html>
