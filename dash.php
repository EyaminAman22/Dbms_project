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
                       <div class="emp"><button>
                       <img  class="icon"  src="expired.png" alt=""> <br> Expire & Out of Stock</button></div>
        </div>
        <div class="row">
                <a href="addmedicine.php">
                <div class="emp"><button>
                <img  class="icon"  src="medicine.png" alt=""> <br>  Add Medicine</button></div>
                </a>
                <a href="addinvoice.php"><div class="emp"><button>
                   <img  class="icon"  src="dlf.pt-invoice-png-1742756.png" alt=""> <br> Add Invoice </button></div></a>
                   <div class="emp"><button>
                       <img  class="icon"  src="sales.png" alt=""> <br> Monthly Sales </button></div>
                       <div class="emp"><button>
                       <img  class="icon"  src="payment-method.png" alt=""> <br>Payment </button></div>
        </div>
      
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="">const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

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