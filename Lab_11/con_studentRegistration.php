<?php
    include_once "../classes/student.php";
    $s = new student();
    $s->insert($_POST);
    header("Location: listStudent.php");
?>