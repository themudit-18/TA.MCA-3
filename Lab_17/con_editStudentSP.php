<?php
    include_once "../classes/storedProcedure/studentSP.php";
    $s = new student();
    $s->update($_POST);
    header("Location: listStudentSP.php");
?>