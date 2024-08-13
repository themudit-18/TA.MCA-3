<?php
    include_once "../classes/PreparedStatement/studentPrep.php";
    $s = new student();
    $s->delete($_GET['id']);
    header("Location: listStudentPrep.php");
    die();
?>