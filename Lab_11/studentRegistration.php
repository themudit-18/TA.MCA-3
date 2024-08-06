<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    <h1>Add New Student</h1>
    <br/>
    <form action="con_studentRegistration.php" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td>:</td>
                <td><input type="text" name="branch"></td>
            </tr>
            <tr>
                <td>Sem</td>
                <td>:</td>
                <td>
                    <select name="sem">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan='3'>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>