<?php include('conn.php'); ?>
<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$hire=$_POST['hired_date'];
	$dep=$_POST['department'];
    $id=$_GET['id'];
    $query = "INSERT INTO employee(name,hired_date,department) VALUES
	('$name','$hire','$dep')";
       $result=mysqli_query($conn, $query);
}
       if (!$result){
        die("query failed".mysqli_error());
       }
       else{
            header('location:index.php');          
}
?>


