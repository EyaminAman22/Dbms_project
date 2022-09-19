<?php 
session_start();
include("connection.php");
include("function.php");



#$user_data=check_login($connect);


$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$gender=$_POST['gender'];
$age=$_POST['age'];
$phone=$_POST['phone'];

$customer_id = random_num(5);
$query = "INSERT INTO `customer2`(`first_name`, `last_name`, `gender`, `age`, `phone`, `customer_id`) VALUES ('$first_name','$last_name','$gender','$age','$phone','$customer_id')";
mysqli_query($connect, $query);
header("Location: addcustomer.php");




?>