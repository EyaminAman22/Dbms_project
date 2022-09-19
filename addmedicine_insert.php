<?php 
session_start();
include("connection.php");
include("function.php");
error_reporting(0);
#$user_data=check_login($connect);

$medicine_name=$_POST["medicine_name"];
$dosage=$_POST["dosage"];
$mgf=$_POST["mgf"];
$exp=$_POST["exp"];
$category=$_POST["category"];
$quantity=$_POST["quantity"];
$base_price=$_POST["base_price"];
$sell_price=$_POST["sell_price"];
$company_id=$_POST["company_id"];



$query = "INSERT INTO `medicine1`(`medicine_id`, `medicine_name`, `dosage(mg/ml)`, `mgf`, `exp`, `category`, `quantity`, `base_price`, `sell_price`, `company_id`) VALUES ('$medicine_id','$medicine_name','$dosage','$mgf','$exp','$category','$quantity','$base_price','$sell_price','$company_id')";
// "insert into medicine1 (medicine_id, medicine_name, dosage, mgf, exp, category, quantity,base_price,sell_price,company_id) VALUES ('$medicine_id','$medicine_name','$dosage','$mgf','$exp','$category','$quantity','$base_price','$sell_price','$company_id')";
$data = mysqli_query($connect, $query);
header("Location: addmedicine.php");

// if( !empty($medicine_name) && !empty($dosage)  && !empty($mgf) && !empty($exp) && !empty($category)&& !empty($quantity)&& !empty($base_price)&& !empty($sell_price))
// {
    
//     
//     die;
//   }


?>