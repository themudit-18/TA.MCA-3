<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Student Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>Student List</h1>

    <a href="studentRegistration.php" class="btn btn-outline-primary">Add New Student</a>
    <br/><br/>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Branch</td>
            <td>Sem</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
            include_once "../classes/student.php";
            $s = new student();
            $stuArr = $s->getAll();
            foreach ($stuArr as $key => $value) {
        ?>

        <tr>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['branch'] ?></td>
            <td><?php echo $value['sem'] ?></td>
            <td><a href="detailStudent.php?id=<?php echo $value['id'] ?>">Know More</a></td>
            <td><a href="editStudent.php?id=<?php echo $value['id'] ?>">Edit</a></td>
            <td><a href="con_deleteStudent.php?id=<?php echo $value['id'] ?>">Delete</a></td>
        </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>