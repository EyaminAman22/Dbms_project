<?php  //
session_start();
include("connection.php");
include("function.php");

#$user_data=check_login($connect);
//
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- My CSS -->
    <link rel="stylesheet" href="dash.css?v=<?php echo time();?>">

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
        <div class="row">
            <div class="emp">
                <a href="addemployee.php"><button>
                    <img  class="icon"  src="employee.png" alt=""> <br>  Add Employee</button></a>
            </div>
                <a href="addcustomer.php">
                    <div class="emp"><button>
                        <img  class="icon"  src="rating.png" alt=""> <br>  Add Customer</button></div> </a>
                        <a href="addcompany.php"><div class="emp"><button>
               
               <img  class="icon"  src="enterprise.png" alt=""> <br> Add Company</button>
            </div></a>
                       <a href="expire.php">
                       <div class="emp"><button>
                       <img  class="icon"  src="expired.png" alt=""> <br> Expire</button></div>
        </div>   
                       </a>
        <div class="row">
                <a href="addmedicine.php">
                <div class="emp"><button>
                <img  class="icon"  src="medicine.png" alt=""> <br>  Add Medicine</button></div>
                </a>
                <a href="addinvoice.php"><div class="emp"><button>
                   <img  class="icon"  src="dlf.pt-invoice-png-1742756.png" alt=""> <br> Add Invoice </button></div></a>
                   <div class="emp"><button>
                       <img  class="icon"  src="sales.png" alt=""> <br> Monthly Sales </button></div>
                       <a href="stock.php"><div class="emp"><button>
                       <img  class="icon"  src="out-of-stock.png" alt=""> <br>Out of Stock </button></div>
        </div></a>
      
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

</body>
</html>