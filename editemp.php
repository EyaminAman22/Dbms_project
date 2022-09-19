<?php 
session_start();
include("connection.php");
include("function.php");
error_reporting(0);


#$user_data=check_login($connect);



$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$join_date=$_POST["join_date"];
$salary=$_POST["salary"];
$address=$_POST["address"];

if(!empty($first_name) && !empty($last_name) && !empty($email)  && !empty($phone) && !empty($salary) && !empty($address) && !is_numeric($first_name) && !is_numeric($last_name) && !is_numeric($email) && is_numeric($phone) && is_numeric($salary) && !is_numeric($address))
{
    $employee_id=random_num(5);
    $query= "insert into employee1 (first_name, last_name, email, phone, join_date, salary, address,employee_id) VALUES ('$first_name','$last_name','$email','$phone','$join_date','$salary','$address','$employee_id')";
    $data=mysqli_query($connect,$query);
    header("Location: addemployee.php");
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
               <div class="texthead"><p>Update Company Details</p></div>
        </div>
        <div class="row3">

           <form action="" method="POST">
            <?php 
            if(isset($_POST['edit'])){
                
$employee_id=$_POST['employee_id'];
$editquery="select * from employee1 where employee_id='$employee_id'";
$query=mysqli_query($connect,$editquery);
if($query)
{   while($result=mysqli_fetch_array($query)){
    ?>      
  

    <input type="hidden" name="employee_id" value="<?php echo $result['employee_id']?>">
    <input name="first_name" placeholder="First Name"type="text" value="<?php echo $result['first_name']?>"><br>
           <input name="last_name" placeholder="Last Name"type="text" value="<?php echo $result['last_name']?>"><br>
           <input name="email" placeholder="E-mail"type="text" value=" <?php echo $result['email']?>"><br>
            <input name="phone" placeholder="Phone No..." type="number" value="<?php echo $result['phone']?>"><br>
            <input name="join_date" placeholder="Joining Date" type="date" onfocus="(this.type='date')" value="<?php echo $result['join_date']?>"><br>
            <input name="salary" placeholder="Salary" type="number" value="<?php echo $result['salary']?>"><br>
            <input name="address" placeholder="Address"type="text" value="<?php echo $result['address']?>"><br>

            <div class="btn"><input class="btn" type="submit" value="save"><input class="btn" type="reset"><br></div>
                <?php
}}}  if(isset($_POST['edit'])){
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $join_date=$_POST["join_date"];
    $salary=$_POST["salary"];
    $address=$_POST["address"];
    
   

    $employee_id=$_POST['employee_id'];
    $editquery="update * from employee1 set last_name='$last_name',last_name='$last_name',email= '$email',phone='$phone',join_date='$join_date',salary='$salary',address= '$address' where employee_id='$employee_id'";
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