<?php
    include_once "../classes/PreparedStatement/studentPrep.php";
    $s = new student();
    $s->insert($_POST);
    header("Location: listStudentPrep.php");
?>