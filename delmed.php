<?php
session_start();
include("connection.php");
include("function.php");
#$user_data=check_login($connect);
if(isset($_POST['delete'])){
$medicine_id=$_POST['medicine_id'];
$delquery="Delete from medicine1 where medicine_id='$medicine_id'";
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
header('location:medicine.php');?>