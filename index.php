<?php
include('header.php');?>
<?php
include('conn.php');?>
<div class="box1"  >
<h2 style="float: left; color: white;">ALL EMPLOYEES</h2>
<br><br>
<a href="add.php" role="button" class="btn btn-primary" style="float: right;"> ADD EMPLOYEE</a>
<br><br>
<table id="mytable" class="table table-hover table-bordered table-striped" >
    <thead style=>
    <tr style="color:white; font-size: larger;">
        <th>ID</th>
        <th>Name</th>
        <th>Hired Date</th>
        <th>Department</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
       <?php
       $query = "SELECT * FROM employee ";
       $result=mysqli_query($conn, $query);
       if (!$result){
        die("query failed".mysqli_error());
       }
       else{
            while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr style="color:white; font-size:larger;" >
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['hired_date']; ?></td>
                        <td> <?php echo $row['department']; ?></td>
                        <td>
								<a href="edit.php?id=<?=$row['id'] ?>" role="button" class="btn btn-warning">Update</a> 
								  <a href="delete.php?id=<?=$row['id'] ?>" role="button" class="btn btn-danger">DELETE</a></td>
                     </tr>
                    <?php
            }
       } 
       ?>
     </tbody>
    </table>  
    
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>     
<script>
$(document).ready(function(){
    $('#mytable').DataTable();
    });
</script>
<?php
include('footer.php');
?> 
