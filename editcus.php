<?php 
session_start();
include("connection.php");
include("function.php");
error_reporting(0);


#$user_data=check_login($connect);


$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$gender=$_POST['gender'];
$age=$_POST['age'];
$phone=$_POST['phone'];

if(!empty($first_name) && !empty($last_name) && !empty($gender)  && !empty($age) && !empty($phone) && !is_numeric($first_name) && !is_numeric($last_name) && !is_numeric($gender) && is_numeric($age) && is_numeric($phone)){
    $customer_id=random_num(5);
    $query= "insert into customer2 (first_name,last_name,gender,age,phone,customer_id) VALUES ('$first_name','$last_name','$gender','$age','$phone','$customer_id')";
    mysqli_query($connect, $query);
    header("Location: addcustomer.php");
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
		
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			
				
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
           <input name="first_name" placeholder="First Name"type="text"><br>
           <input name="last_name" placeholder="Last Name"type="text"><br>
           <input name="gender" placeholder="Gender"type="text"><br>
           <input name="age" placeholder="Age" type="number"><br>
            <input name="phone" placeholder="Phone No..." type="number"><br>

            <div class="btn"><input class="btn" type="submit"><input class="btn" type="reset"><br></div>
           </form>
        </div>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

        
    
</body>
</html>