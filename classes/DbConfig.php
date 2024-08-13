<?php
    class DbConfig 
    {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $dbName = "MCA-TA";
        public $con = "";

        function __construct()
        {
            try {
                $this->con = mysqli_connect($this->host , $this->username , $this->password , $this->dbName) or die("Some Error Occurs, Message : ". mysqli_connect_error());
            } catch (Exception $e) {
                echo "Exception Occure, Message: ". $e;
            }
        }
    }
    
?>