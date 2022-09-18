<?php
session_start();
include("connection.php");
include("function.php");
#$user_data=check_login($connect);
if(isset($_POST['delete'])){
$customer_id=$_POST['customer_id'];
$delquery="Delete from customer2 where customer_id='$customer_id'";
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
header('location:customer.php');?>