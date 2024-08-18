<?php
    include_once "../classes/storedProcedure/studentSP.php";
    $s = new student();
    $s->insert($_POST);
    header("Location: listStudentSP.php");
?>