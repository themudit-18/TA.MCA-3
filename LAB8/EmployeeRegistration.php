<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $position = trim($_POST['position']);
    $password = trim($_POST['password']);

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

    if (empty($position)) {
        $errors['position'] = 'Position is required';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Password must be at least 6 characters';
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
    <title>Employee Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            margin-top: 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            font-size: 0.875em;
            margin-top: -10px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Employee Registration Form</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
            <span class="error"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></span>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
            <span class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>

            <label for="position">Position:</label>
            <input type="text" name="position" id="position" value="<?php echo isset($position) ? htmlspecialchars($position) : ''; ?>">
            <span class="error"><?php echo isset($errors['position']) ? $errors['position'] : ''; ?></span>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <span class="error"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></span>

            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</body>
</html>
