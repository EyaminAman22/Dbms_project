
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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
              <li> <a href="">Medicine</a></li>
                    <li> <a href="company.php">Company info</a></li>
                    <li> <a href="invoice.php">Invoice</a></li>
                     <li> <a href="">Monthly Income Report</a></li>
                    <li><a href="customer.php">Customer </a></li>
                    <li><a href="">Payment Info</a></li>
    
              </li>
             
              
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
			
      <div class="profile"><p>Hello, <?php #echo $_SESSION['username']?></p><a href="login.php"><button>log out </button></a></div>

			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		  <div class="tab">
          <table>
          <thead> <tr><th>Medicine ID</th>
            <th> Medicine Name</th>
            <th>Dosage</th>
            <th>Manufacture</th>
            <th>Expiry</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Base Price</th>
            <th>Sell Price</th>
            <th>Company ID</th>
            <th>Operation</th>
        </tr></thead>
            <tbody>

           <?php 
           session_start();
           include("connection.php");
           include("function.php");
           #$user_data=check_login($connect);
           
           
           $query="SELECT * FROM medicine1";
           $data=mysqli_query($connect,$query);
           $total=mysqli_num_rows($data);
           
           
           
           if($total!=0){
    while($result=mysqli_fetch_array($data)){ ?>
            <tr>
            <td><?php echo $result['medicine_id']?></td>
            <td><?php echo $result['medicine_name']?></td>
            <td><?php echo $result['dosage']?></td>
            <td><?php echo $result['mgf']?></td>
            <td><?php echo $result['exp']?></td>
            <td><?php echo $result['category']?></td>
            <td><?php echo $result['quantity']?></td>
            <td><?php echo $result['base_price']?></td>
            <td><?php echo $result['sell_price']?></td>
            <td><?php echo $result['company_id']?></td>
            <td> <form action="delmed.php" method="POST">
                <input type="hidden" name="medicine_id" value="<?php echo $result['medicine_id']?>">
                <input type="submit" name="delete" class="operation" value="Delete">
            </form></td>
            </tr>
            </tr>
<?php
    }
}  ?>
            </tbody>

          </table>
          </div>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

        
     
</body>
</html>