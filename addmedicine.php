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

if( !empty($medicine_name) && !empty($dosage)  && !empty($mgf) && !empty($exp) && !empty($category)&& !empty($quantity)&& !empty($base_price)&& !empty($sell_price))
{
    $query= "insert into medicine1 (medicine_id, medicine_name, dosage, mgf, exp, category, quantity,base_price,sell_price,company_id) VALUES ('$medicine_id','$medicine_name','$dosage','$mgf','$exp','$category','$quantity','$base_price','$sell_price','$company_id')";
    $data=mysqli_query($connect,$query);
    header("Location: addmedicine.php");
    die;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>input[type=data]:require:invalid::-webkit- datetime-edit {color:transparent;}
     input[type=data]:focus::-webkit- datetime-edit {color:black;}</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
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
             <li> <a href="dash.php">Dashboard</a></li>  
              <li><a href="employee.php">Employee</a></li>
                    <li> <a href="medicine.php">Medicine</a></li>
                    <li> <a href="company.php">Company info</a></li>
                    <li> <a href="invoice.php">Invoice</a></li>
                <li> <a href="">Monthly Income Report</a></li>
             <li><a href="customer.php">Customer </a></li>
             <li><a href="">Payment Info</a></li>
              
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
               <div class="texthead"><p>Medicine Details</p></div>
        </div>
        <div class="row3">
           <form action="" method="POST">
           <input name="medicine_name" placeholder="Medicine Name"type="text"><br>
           <input name="dosage" placeholder="Dosage(mg/ml)"type="number"><br>
           <input name="mgf" placeholder="MGF"type="date"><br>
            <input name="exp" placeholder="EXP" type="date"><br>
            <input name="category" placeholder="Category" type="text" list="exampleList"><br>
                   <datalist id="exampleList">
                      <option value="Tablet">  
                      <option value="Liquid">
                         </datalist>
            <input name="quantity" placeholder="Quantity"type="number"><br>
        
            <input name="base_price" placeholder="Base Price" type="number"><br>
            <input name="sell_price" placeholder="Sell Price"type="number"><br>
            <input name="company_id" placeholder="Company ID"type="number"><br>
            <div class="btn"><input class="btn" type="submit"><input class="btn" type="reset"><br></div>
           </form>
        </div>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
</body>
</html>