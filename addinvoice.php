<?php 
session_start();
include("connection.php");
include("function.php");
error_reporting(0);

#$user_data=check_login($connect);
$invoice_id=$_POST["invoice_id"];
$total_payment=$_POST["total_payment"];
$payment_due=$_POST["payment_due"];
$paid_amount=$_POST["paid_amount"];
$company_id=$_POST["company_id"];
$invoice_date=$_POST["invoice_date"];

if( !empty($total_payment) && !empty($payment_due) && !empty($company_id))
{
    $query= "insert into invoice1 (invoice_id,total_payment,payment_due,paid_amount,company_id,invoice_date) VALUES ('$invoice_id','$total_payment','$payment_due','$paid_amount','$company_id','$invoice_date')";
    $data=mysqli_query($connect,$query);
    header("Location: addinvoice.php");
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
                 
             

                <li> <a href="MIreport.com">Monthly Income Report</a></li>
    
             
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
               <div class="texthead"><p>Company Details</p></div>
        </div>
        <div class="row3">
           <form action="" method="POST">
           <input name="invoice_id" placeholder="Invoice"type="number"><br>
           <input name="total_payment" placeholder="Total Payment"type="number"><br>
            <input name="payment_due" placeholder="Payment Due" type="number"><br>
            <input name="paid_amount" placeholder="Paid Amount" type="number"><br>
            <input name="company_id" placeholder="Company ID"type="number"><br>
            <input name="invoice_date" placeholder="Invoice Date"type="date"><br>
            <div class="btn"><input class="btn" type="submit"><input class="btn" type="reset"><br></div>
           </form>
        </div>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="">const allSideMenu = document.querySelectorAll('#navbar .nav .subnav li a');

        allSideMenu.forEach(item=> {
            const li = item.parentElement;
        
            item.addEventListener('click', function () {
                allSideMenu.forEach(i=> {
                    i.parentElement.classList.remove('active');
                })
                li.classList.add('active');
            })
        });
        
        
        
        
        // TOGGLE SIDEBAR
        const menuBar = document.querySelector('#content nav .bx.bx-menu');
        const sidebar = document.getElementById('sidebar');
        
        menuBar.addEventListener('click', function () {
            sidebar.classList.toggle('hide');
        })
        
        
        
        
        
        
        
        const searchButton = document.querySelector('#content nav form .form-input button');
        const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
        const searchForm = document.querySelector('#content nav form');
        
        searchButton.addEventListener('click', function (e) {
            if(window.innerWidth < 576) {
                e.preventDefault();
                searchForm.classList.toggle('show');
                if(searchForm.classList.contains('show')) {
                    searchButtonIcon.classList.replace('bx-search', 'bx-x');
                } else {
                    searchButtonIcon.classList.replace('bx-x', 'bx-search');
                }
            }
        })
        
        
        
        
        
        if(window.innerWidth < 768) {
            sidebar.classList.add('hide');
        } else if(window.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }
        
        
        window.addEventListener('resize', function () {
            if(this.innerWidth > 576) {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
                searchForm.classList.remove('show');
            }
        })
        
        
        
        const switchMode = document.getElementById('switch-mode');
        
        switchMode.addEventListener('change', function () {
            if(this.checked) {
                document.body.classList.add('dark');
            } else {
                document.body.classList.remove('dark');
            }
        })</script>
</body>
</html>