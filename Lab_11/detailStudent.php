<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once "../classes/student.php";
        $s = new student();
        $stu = $s->getById($_GET['id']);
    ?>

    <h1>Detail of a Student</h1>

    <table border="1">
        <tr>
            <th>Id</th>
            <td><?php echo $stu['id'] ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $stu['name'] ?></td>
        </tr>
        <tr>
            <th>Branch</th>
            <td><?php echo $stu['branch'] ?></td>
        </tr>
        <tr>
            <th>Sem</th>
            <td><?php echo $stu['sem'] ?></td>
        </tr>
        <tr>
            <td colspan=2>
                <a href="./listStudent.php" class="btn btn-outline-dark m-2">Back</a>
            </td>
        </tr>
    </table>
</body>
</html>