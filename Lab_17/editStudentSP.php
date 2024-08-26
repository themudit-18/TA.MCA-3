<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once "../classes/storedProcedure/studentSP.php";
        $s = new student();
        $stu = $s->getById($_GET['id']);
    ?>

    <h1>Edit Student</h1>
    <form action="con_editStudentSP.php" method="post">
        <input type="hidden" name="id" value="<?php echo $stu['id']?>">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name" value="<?php echo $stu['name']?>"></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td>:</td>
                <td><input type="text" name="branch" value="<?php echo $stu['branch']?>"></td>
            </tr>
            <tr>
                <td>Sem</td>
                <td>:</td>
                <td>
                    <select name="sem">
                        <option
                            <?php
                                if($stu['sem']==1){
                                    echo "selected";
                                }
                            ?>
                        >1</option>
                        <option
                            <?php
                                if($stu['sem']==2){
                                    echo "selected";
                                }
                            ?>
                        >2</option>
                        <option
                            <?php
                                if($stu['sem']==3){
                                    echo "selected";
                                }
                            ?>
                        >3</option>
                        <option
                            <?php
                                if($stu['sem']==4){
                                    echo "selected";
                                }
                            ?>
                        >4</option>
                        <option
                            <?php
                                if($stu['sem']==5){
                                    echo "selected";
                                }
                            ?>
                        >5</option>
                        <option
                            <?php
                                if($stu['sem']==6){
                                    echo "selected";
                                }
                            ?>
                        >6</option>
                        <option
                            <?php
                                if($stu['sem']==7){
                                    echo "selected";
                                }
                            ?>
                        >7</option>
                        <option
                            <?php
                                if($stu['sem']==8){
                                    echo "selected";
                                }
                            ?>
                        >8</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan='3'>
                    <a href="listStudentSP.php" class="btn btn-outline-warning">Cancel</a>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>