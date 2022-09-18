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



sdhsjhd
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
                
$customer_id=$_POST['customer_id'];
$editquery="select * from customer2 where customer_id='$customer_id'";
$query=mysqli_query($connect,$editquery);
if($query)
{   while($result=mysqli_fetch_array($query)){
    ?>     <input type="hidden" name="customer_id" value="<?php echo $result['customer_id']?>">
           <input name="first_name" placeholder="First Name"type="text" value="<?php echo $result['first_name']?>"><br>
           <input name="last_name" placeholder="Last Name"type="text" value="<?php echo $result['last_name']?>"><br>
           <input name="gender" placeholder="Gender"type="text" value="<?php echo $result['gender']?>"><br>
           <input name="age" placeholder="Age" type="number" value="<?php echo $result['age']?>"><br>
            <input name="phone" placeholder="Phone No..." type="number" value="<?php echo $result['phone']?>"><br>

            <div class="btn"><input class="btn" type="submit" value="save"><input class="btn" type="reset"><br></div>
                <?php
}}}  if(isset($_POST['edit'])){
    $first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$gender=$_POST['gender'];
$age=$_POST['age'];
$phone=$_POST['phone'];

    $customer_id=$_POST['customer_id'];
    $editquery="update from customer2 set 'first_name'=$first_name,'last_name'= $last_name,'gender'=$gender,'age'= $age,'phone'= $phone where customer_id='$customer_id'";
    $query=mysqli_query($connect,$editquery);
    if($query)
{      header("Location:customer.php");
}
}
           ?>
           </form>
           
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

        
    
</body>
</html>