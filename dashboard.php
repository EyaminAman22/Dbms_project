<?php
session_start();
include("connection.php");
include("function.php");
$user_data=check_login($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="dashboard.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
</head>
<body>
    <section id="navbar">
        <div class="logo">Pharma Mart</div>
      <div class="nav">
        <ul>
           <li> <a href="">Dashboard</a></li>
           
            <li><a href="">Employee</a></li>
           <li> <a href="">Inventory</a>
            <!--<div class="subnav"><li> <a href="">Add Medicine</a></li>
                <li> <a href="">Medicine</a></li>
                <li> <a href="">Company info</a></li>
                <li> <a href="">Invoice</a></li></div>-->
            </li>
           
           
           <li><a href="">Report</a></li>
           <li><a href="">Projectile</a></li>
           <li><a href="">Customer </a></li>
            
        </ul>
      </div>
    </section>
    
    <section id="db">
    <div class="db backside">
       <div class="db search"> 
        <input type="text" placeholder="search">
           <div class="log"><p>Hello,</p>
            <button><a href="login.php">Log out</a></button></div>
       </div>
    </div>
</section>


        

           
    
    
</body>
</html>