<?php
    include_once "../classes/student.php";
    $s = new student();
    $s->delete($_GET['id']);
    header("Location: listStudent.php");
    die();
?>