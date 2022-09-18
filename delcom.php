<?php
session_start();
include("connection.php");
include("function.php");
#$user_data=check_login($connect);
if(isset($_POST['delete'])){
$company_id=$_POST['company_id'];
$delquery="Delete from company1 where company_id='$company_id'";
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
header('location:company.php');?>