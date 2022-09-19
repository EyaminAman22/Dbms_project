
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
              <li> <a href="medicine.php">Medicine</a></li>
                    <li> <a href="company.php">Company info</a></li>
                    <li> <a href="invoice.php">Invoice</a></li>
                     <li> <a href="Mireport.php">Monthly Income Report</a></li>
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
			
      <div class="profile"><p>Hello, <?php #echo $_SESSION['username']?></p><a href="login.php"><button>log out </button></a></div>

			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		  <div class="tab">
          <table>
          <thead> <tr>
            <th>Company Name</th>
            <th>E-mail</th>
            <th>Phone No.</th>
            <th>Address</th>
            <th>Company ID</th>
            <th>Operation</th>
        </tr></thead>
            <tbody>

           <?php 
           session_start();
           include("connection.php");
           include("function.php");
           #$user_data=check_login($connect);
           
           
           $query="SELECT * FROM company1";
           $data=mysqli_query($connect,$query);
           $total=mysqli_num_rows($data);
           
           
           
           if($total!=0){
    while($result=mysqli_fetch_array($data)){ ?>
            <tr>
            <td><?php echo $result['company_name']?></td>
            <td><?php echo $result['email']?></td>
            <td><?php echo $result['phone']?></td>
            <td><?php echo $result['address']?></td>
            <td><?php echo $result['company_id']?></td>
           
            <td>
            <form action="delcom.php" method="POST">
                <input type="hidden" name="company_id" value="<?php echo $result['company_id']?>">
                <input type="submit" name="delete" class="operation" value="Delete">
            </form>
            <form action="editcom.php" method="POST">
                <input type="hidden" name="company_id" value="<?php echo $result['company_id']?>">
                <input type="submit" name="edit" class="operation" value="Edit">
            </form>
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