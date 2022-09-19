<?php
session_start();
include("connection.php");
include("function.php");
#$user_data=check_login($connect);
if(isset($_POST['delete'])){
$employee_id=$_POST['employee_id'];
$delquery="Delete from employee1 where employee_id='$employee_id'";
$query=mysqli_query($connect,$delquery);
if($query){
    ?>
    <script>alert("Deleted Successfully")</script>
    <?php
}

else{
?>
<script>alert("Not deleted")</script>
<?php ;
}
}
header('location:employee.php');?>