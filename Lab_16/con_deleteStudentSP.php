<?php
    include_once "../classes/storedProcedure/studentSP.php";
    $s = new student();
    $s->delete($_GET['id']);
    header("Location: listStudentSP.php");
    die();
?>