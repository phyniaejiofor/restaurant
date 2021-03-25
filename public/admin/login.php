<?php

require_once('../../private/initialize.php');

$email = '';

if(is_post_request()) {

  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validations
  if(is_blank($email)) {
    $errors[] = "Email cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }
  if(empty($errors)){
    $admin = find_admin_by_email($email);
      if($admin){
          if(password_verify($password , $admin['password'])){
              log_in_admin($admin);
              redirect_to("dashboard/dashboard.php");
          }else{
            //email found but password does not match
            $errors[] = "log in not successful";
            
          }
      }
      else{
        //no email was found
         $errors[] = "log in not successful";
            
      }
  }

}



?>




<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login Page</title>
</head>
<style>

.wrapper{
  background:linear-gradient(to bottom, #cda45e 40%, #8f9779 60%); 
  max-width: 400px;
  width: 600px;
  margin: 120px auto;
  padding: 25px;
  border-radius: 30px;
  box-shadow: 0px 10px 15px rgba(30, 207, 7, 0.1);
}
.wrapper header{
  font-size: 30px;
  font-weight: 600;
  padding:2px;
  margin:2px;
  color:white;
  text-align:center;
}
.wrapper label{
    border-radius: 30px;
}
.wrapper img{
    border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 70px;;
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
.inputField button{
  border: 20px;
  padding:2px;
  margin: 2px;
  text-align: center;
  color: white;
  margin-left: auto;
  margin-right: auto;
  font-size: 15px;
  background: blue;
  cursor: pointer;
  border-radius: 3px;
}
</style>
 
<body>
<div class="wrapper">
   <img src="../assets/img/ppf.png" alt="image">
   <header>LogIn To TastyBites</header>

   <div class="inputField">
  <form action="login.php" method="POST" >
    <input type="text" placeholder="Enter email" name="email" required></label><br>

    <input type="password" placeholder="Enter Password" name="password" required> <br>

    <button type="submit">Login</button>

    
  </div>
  </div>
</form>
</div>
</body>
</html>