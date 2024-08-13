<?php
	
	include_once "../classes/DbConfig.php";
	
	class Student extends DbConfig
	{
		
		function getAll(){
			$res = mysqli_query($this->con, "call SP_GetAll()");


			$resArray = array();

			while ($row = mysqli_fetch_assoc($res)) {
				$resArray[] = $row;
			}

			return $resArray;
		}

		function insert($input){
			extract($input);

			//sql stored procedure call
			$res = mysqli_query($this->con, "call SP_Insert('$name', '$branch', $sem)");

			$resMessage = "Insert Successfull";

			return $resMessage;
		}

		function getById($id){
			$res = mysqli_query($this->con, "call SP_GetById($id)");

			$resRow = mysqli_fetch_assoc($res);

			return $resRow;
		}

		function delete($id){
			
			$res = mysqli_query($this->con, "call SP_Delete($id)");

			$resMsg = "Delete Successfull";

			return $resMsg;
		}

		function update($input){
			extract($input);

			//sql stored procedure call
			$res = mysqli_query($this->con, "call SP_Update('$name', '$branch', $sem, $id)");

			$resMessage = "Update Successfull";

			return $resMessage;
		}
	}

?>