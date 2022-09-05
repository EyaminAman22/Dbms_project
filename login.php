<?php
session_start();

include("connection.php");
include("function.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $user_name=$_POST["user_name"];
  $password=$_POST["password"];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

    $query= "select* from signup where user_name='$user_name' LIMIT 1";
    $result= mysqli_query($connect, $query);
    if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:dash.php");
						die;
					}
				}
			}
      echo " Invalid user name or password";
    
  }
  else {
    echo " Invalid user name or password.";
  }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
     
  <section id="form">
    <div class="container">
      <div class="card">
        <h1 class="sign">log in</h1><br>
        <form action="" method="post">
       
        <input type="text" class="input-box" name="user_name" value="" placeholder="user name"><br>
        
        <input type="password" class="input-box" name="password" value="" placeholder="password"><br>
        <p> <input type="checkbox"> Remember my password</p>       
        <div ><input id="btn" type="submit" value="login"></div>
        <p>Do you have an account? or <a href="signup.php">sign up</a></p>
      </form>
    </div>
  </div>
  
    </section> 
</body>
</html>