<?php
	session_start();
	include_once('conn.php');

	if(isset($_POST['update'])){

		$id = $_POST['id'];
		$name = $_POST['name'];
		$hire = $_POST['hired_date'];
		$dep = $_POST['department'];
		
		$query = "UPDATE employee SET name = '$name', 
	hired_date = '$hire', department = '$dep' WHERE id = '$id'";
    }
		$result = mysqli_query($conn, $query);
		if(!$result){
            die("query failed".mysqli_error($conn));
        }
			
		
		else {
			header('location: index.php');
		}		



?>