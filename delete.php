<?php include('conn.php'); ?>
<?php include('header.php'); ?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "DELETE FROM employee where id='$id'";
       $result=mysqli_query($conn, $query);
}
       if (!$result){
        die("query failed".mysqli_error());
       }
       else{
            header('location:index.php');          
}
?>