<?php

session_start();
include("connection.php");
include("function.php");



$name = $_POST['name'];
$dose = $_POST['dose'];
$quantity = $_POST['quantity'];

echo $name;
echo $dose;

$medicine_data = "SELECT 'sell_price' FROM `medicine1` where medicine_name='$name' and dosage(mg/ml)='$dose'";

echo $medicine_data;

// $price = $quantity

// $query = "INSERT INTO `order_items`(`dosage`, `p_name`, `p_quantity`, `total_price`) VALUES ('$dose','$name','$quantity','[value-4]')";

// $data = mysqli_query($connect, $query);
// header("Location: addmedicine.php");


?>