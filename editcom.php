<?php 
session_start();
include("connection.php");
include("function.php");
error_reporting(0);


#$user_data=check_login($connect);


$company_name=$_POST["company_name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];

if(!empty($company_name) && !empty($email) && !empty($address) && !empty($phone) && !empty($address) && !is_numeric($company_name) && !is_numeric($email) && is_numeric($phone) && !is_numeric($address))
{
    $company_id=random_num(3);
    $query= "insert into company1 (company_name, email, phone, address,company_id) VALUES ('$company_name','$email','$phone','$address','$company_id')";
    $data=mysqli_query($connect,$query);
    header("Location: addcompany.php");
    die;
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="dash.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
    <section id="navbar">
        <div class="logo">
          <img src="transparent-admin-icon-avatar-icon-human-icon-5d645ce97094b3.2235955315668584734611.png" 
        alt="" style="height: 100px;
          width: 100px;"></div>
          <div class="text"> 
            Pharma Mart</div>
        <nav class="nav">
        <ul>
        <<li> <a href="dash.php">Dashboard</a></li>
             
             <li><a href="employee.php">Employee</a></li>
                   <li> <a href="medicine.php">Medicine</a></li>
                   <li> <a href="company.php">Company info</a></li>
                   <li> <a href="invoice.php">Invoice</a></li>
                    <li> <a href="MIreport.php">Monthly Income Report</a></li>
                   <li><a href="customer.php">Customer </a></li>
                   <li><a href="">Payment Info</a></li>
              
          </ul>
        </nav>
      </section>
      
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
		
		
			
				
            <div class="profile"><p>Hello,</p><a href="login.php"><button>log out </button></a></div>
			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<div class="row2">
            <div class="emp2"><button><a href="dash.php">
                <img  class="icon"  src="back-arrow.png" alt=""></a></button></div>
               <div class="texthead"><p>Update Customer Details</p></div>
        </div>
        <div class="row3">

           <form action="" method="POST">
            <?php 
            if(isset($_POST['edit'])){
                
$company_id=$_POST['company_id'];
$editquery="select * from company1 where company_id='$company_id'";
$query=mysqli_query($connect,$editquery);
if($query)
{   while($result=mysqli_fetch_array($query)){
    ?>     
            <input name="company_name" placeholder="Company Name"type="text"><br>
           <input name="email" placeholder="E-mail"type="email"><br>
            <input name="phone" placeholder="Phone No..." type="number"><br>
            <input name="address" placeholder="Address"type="text"><br>

            <div class="btn"><input class="btn" type="submit" value="save"><input class="btn" type="reset"><br></div>
                <?php
}}}  if(isset($_POST['edit'])){
  
    $company_name=$_POST["company_name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];

    $company_id=$_POST['company_id'];
    $editquery="update * from company1 set company_name='$company_name',email= '$email',phone='$phone',address= '$address', where customer_id='$customer_id'";
    $query=mysqli_query($connect,$editquery);
    if($query)
{      header("Location:company.php");
}
}
           ?>
           </form>
           
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

        
    
</body>
</html>