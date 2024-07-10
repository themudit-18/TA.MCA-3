<?php
   
    if(isset($_REQUEST['sub']))
    {
        $name = $_REQUEST['name'];
        echo "method called".$name;
    }
?>