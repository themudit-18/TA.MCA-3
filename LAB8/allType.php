<?php
$errors = [];
$name = $email = $password = $dob = $gender = $color = $language = '';
$accept_terms = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $color = $_POST['color'];
    $language = $_POST['language'];
    $accept_terms = isset($_POST['accept_terms']) ? true : false;

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

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    } elseif (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters';
    }

    if (empty($dob)) {
        $errors['dob'] = 'Date of birth is required';
    }

    if (empty($gender)) {
        $errors['gender'] = 'Gender is required';
    }

    if (empty($color)) {
        $errors['color'] = 'Favorite color is required';
    }

    if (empty($language)) {
        $errors['language'] = 'Programming language is required';
    }

    if (!$accept_terms) {
        $errors['accept_terms'] = 'You must accept the terms and conditions';
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
    <title>Comprehensive Form</title>
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
            padding: 10px;
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
        input[type="text"], input[type="email"], input[type="password"], input[type="date"], select {
            width: calc(100% - 22px);
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
        <h2>Comprehensive Registration Form</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name); ?>">
            <span class="error"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></span>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
            <span class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <span class="error"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></span>

            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob" value="<?php echo htmlspecialchars($dob); ?>">
            <span class="error"><?php echo isset($errors['dob']) ? $errors['dob'] : ''; ?></span>

            <label>Gender:</label>
            <input type="radio" name="gender" value="male" <?php echo ($gender == 'male') ? 'checked' : ''; ?>> Male
            <input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ? 'checked' : ''; ?>> Female
            <span class="error"><?php echo isset($errors['gender']) ? $errors['gender'] : ''; ?></span>
            <br><br>

            <label for="color">Favorite Color:</label>
            <input type="color" name="color" id="color" value="<?php echo htmlspecialchars($color); ?>">
            <span class="error"><?php echo isset($errors['color']) ? $errors['color'] : ''; ?></span>

            <label for="language">Programming Language:</label>
            <select name="language" id="language">
                <option value="" <?php echo ($language == '') ? 'selected' : ''; ?>>Select</option>
                <option value="php" <?php echo ($language == 'php') ? 'selected' : ''; ?>>PHP</option>
                <option value="javascript" <?php echo ($language == 'javascript') ? 'selected' : ''; ?>>JavaScript</option>
                <option value="python" <?php echo ($language == 'python') ? 'selected' : ''; ?>>Python</option>
            </select>
            <span class="error"><?php echo isset($errors['language']) ? $errors['language'] : ''; ?></span>

            <input type="checkbox" name="accept_terms" id="accept_terms" <?php echo $accept_terms ? 'checked' : ''; ?>>
            <label for="accept_terms">I accept the terms and conditions</label>
            <span class="error"><?php echo isset($errors['accept_terms']) ? $errors['accept_terms'] : ''; ?></span>
            <br>

            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</body>
</html>
