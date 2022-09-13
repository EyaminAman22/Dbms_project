<?php
session_start();
include("connection.php");
include("function.php");
#$user_data=check_login($connect);

$employee_id=$_GET['employee_id'];
$delquery="Delete from employee where employee_id='$employee_id'";
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
header('location:employee.php');?>

<?php
$customer_id=$_GET['customer_id'];
$delquery="Delete from employee where employee_id='$customer_id'";
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
header('location:customer.php');?>