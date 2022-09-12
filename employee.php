
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
                    <li> <a href="">Company info</a></li>
                    <li> <a href="">Invoice</a></li>
                     <li> <a href="">Monthly Income Report</a></li>
           
                    <li><a href="">Projectile</a></li>
                    <li><a href="customer.php">Customer </a></li>
    
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
          <table border="3px">
          <thead> <tr><th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Phone No.</th>
            <th>Salary</th>
            <th>Joining Date</th>
            <th>Address</th>
            <th>Employee ID</th>
        </tr></thead>
            <tbody>

           <?php 
           session_start();
           include("connection.php");
           include("function.php");
           #$user_data=check_login($connect);
           
           
           $query="SELECT * FROM employee";
           $data=mysqli_query($connect,$query);
           $total=mysqli_num_rows($data);
           
           
           
           if($total!=0){
    while($result=mysqli_fetch_array($data)){ ?>
            <tr>
            <td><?php echo $result['first_name']?></td>
            <td><?php echo $result['last_name']?></td>
            <td><?php echo $result['email']?></td>
            <td><?php echo $result['phone']?></td>
            <td><?php echo $result['salary']?></td>
            <td><?php echo $result['join_date']?></td>
            <td><?php echo $result['address']?></td>
            <td><?php echo $result['employee_id']?></td>
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