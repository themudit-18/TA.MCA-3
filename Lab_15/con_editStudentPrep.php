<?php
    include_once "../classes/PreparedStatement/studentPrep.php";
    $s = new student();
    $s->update($_POST);
    header("Location: listStudentPrep.php");
?>