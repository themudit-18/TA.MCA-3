<?php
    include_once "DbConfig.php";

    class student extends DbConfig 
    {
        function getAll()
        {
            $sql = "SELECT * FROM student;";
            $res = mysqli_query($this->con, $sql);
            $resArr = array();

            while ($row = mysqli_fetch_assoc($res)) {
                $resArr[] = $row;
            }

            return $resArr;
        }

        function insert($input)
        {
            extract($input);
            $sql = "INSERT INTO student(id, name, branch, sem) VALUES (NULL,'$name', '$branch', $sem);";
            $res = mysqli_query($this->con, $sql);
            $resMessage = "insert successfully";

            return $resMessage;
        }

        function getById($id) {
            $sql = "SELECT * FROM student WHERE id=$id;";
            $res = mysqli_query($this->con, $sql);
            $resRow = mysqli_fetch_assoc($res);
            return $resRow;
        }

        function delete($id) {
            $sql = "DELETE FROM student WHERE id=$id;";
            $res = mysqli_query($this->con, $sql);
            $resMsg = "Deleted Successfull";
            return $resMsg;
        }

        function update($input)
        {
            extract($input);
            $sql = "UPDATE student SET name='$name', branch='$branch', sem=$sem WHERE id=$id;";
            $res = mysqli_query($this->con, $sql);
            $resMessage = "Update Successfully";

            return $resMessage;
        }
    }
    
?>