<?php
    include_once "../classes/student.php";
    $s = new student();
    $s->update($_POST);
    header("Location: listStudent.php");
?>