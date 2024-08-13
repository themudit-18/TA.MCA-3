<?php
    include_once "../classes/DbConfig.php";

    class student extends DbConfig 
    {
        function getAll()
        {
            $sql = "SELECT * FROM student;";
            $stmtGetAll = mysqli_prepare($this->con, $sql);
            mysqli_stmt_execute($stmtGetAll);

            $res = mysqli_stmt_get_result($stmtGetAll);
            $resArr = array();

            while ($row = mysqli_fetch_assoc($res)) {
                // for print one column
                // foreach ($row as $key => $value) {
                //     echo "value = $value <br>";
                // }
                $resArr[] = $row;
            }

            return $resArr;
        }

        function insert($input)
        {
            extract($input);

            $sql = "INSERT INTO student(id, name, branch, sem) VALUES (NULL, ?, ?, ?);";
            //mysqli_prepare : (prepares an SQL statement for execution)
            $stmtInsert = mysqli_prepare($this->con, $sql);

            //s->string , i->integer , d->double , b->blob (to store a huge volume of data as binary strings)
            mysqli_stmt_bind_param($stmtInsert, 'ssi', $name, $branch, $sem);
            mysqli_stmt_execute($stmtInsert);

            $resMessage = "insert successfully";

            return $resMessage;
        }

        function getById($id) {
            $sql = "SELECT * FROM student WHERE id=?;";
            $stmtGetById = mysqli_prepare($this->con, $sql);
            mysqli_stmt_bind_param($stmtGetById, 'i', $id);
            mysqli_stmt_execute($stmtGetById);

            $res = mysqli_stmt_get_result($stmtGetById);
            $resRow = mysqli_fetch_assoc($res);
            return $resRow;
        }

        function delete($id) {
            $sql = "DELETE FROM student WHERE id=?;";
            $stmtDelete = mysqli_prepare($this->con, $sql);
            mysqli_stmt_bind_param($stmtDelete, 'i' ,$id);
            mysqli_stmt_execute($stmtDelete);

            $resMsg = "Deleted Successfull";
            return $resMsg;
        }

        function update($input)
        {
            extract($input);

            $sql = "UPDATE student SET name=?, branch=?, sem=? WHERE id=?;";
            $stmtUpdate = mysqli_prepare($this->con, $sql);
            mysqli_stmt_bind_param($stmtUpdate, 'ssii', $name, $branch, $sem, $id);
            mysqli_stmt_execute($stmtUpdate);

            $resMessage = "Update Successfully";

            return $resMessage;
        }
    }
    
?>