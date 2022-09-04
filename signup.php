<?php
session_start();

include("connection.php");
include("function.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $user_name=$_POST["user_name"];
  $password=$_POST["password"];
  $email=$_POST["e-mail"];

  if(!empty($user_name) && !empty($password)  && !empty($email) && !is_numeric($user_name) && !is_numeric($email)){
    $user_id= random_num(20);
    $query= "insert into signup(user_name,password,email,user_id) values('$user_name','$password','$email','$user_id')";
    mysqli_query($connect, $query);
    header("Location: login.php");
    die;
  }
  else {
    echo " Invalid information. Please enter valid information.";
  }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="signup.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
     
  <section id="form">
    <div class="container">
      <div class="card">
        <h1 class="sign">Sign up</h1><br>
        <form action="" method="POST">
    
        <input type="text" class="input-box" name="user_name" value="" placeholder="user name"><br>
       
        <input type="password" class="input-box" name="password" value="" placeholder="password"><br>
        
        <input type="password" class="input-box" name="password" value="" placeholder="confirm password"><br>

        <input type="text" class="input-box" name="e-mail" value="" placeholder="e-mail"><br>
        <a href=""><button >sign up</button></a>
        <p>Do you have an account? or <a href="login.php">sign in</a></p>
      </form>
    </div>
  </div>
  
    </section> 
</body>
</html>