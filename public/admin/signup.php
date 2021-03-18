<<<<<<< HEAD
<?php

require_once('../../private/initialize.php');

if (is_post_request()) {

    $admin['name'] = $_POST['name'] ?? '';
    $admin['email'] = $_POST['email'] ?? '';
    $admin['password'] = $_POST['password'] ?? '';
    $admin['confirm_password'] = $_POST['confirm_password'] ?? '';

    $result = insert_admin($admin);
    if($result === true) {
        log_in_admin($admin);
        $_SESSION['message'] = 'Admin created successful.';
    }
    else{
     $errors = $result;
    }
   }
  
?>




<div class="">
    <h1>CREATE ADMIN</h1>
    <p><?php echo display_errors($errors); ?></p>
    <p><?php echo $_SESSION['name']; ?></p>
    <div class="">
        <div class="">
            <form action="#" method="post">
                <p>Name: <input class="text" type="text" name="name" placeholder="Username" required=""><br></p>
                <p>Email: <input class="text email" type="email" name="email" placeholder="Email" required=""><br></p>
                <p>Password: <input class="text" type="password" name="password" placeholder="Password" required=""><br></p>
                <p>Confirm Password: <input class="text w3lpass" type="password" name="confirm_password" placeholder="Confirm Password" required=""><br></p>
                <div class="text-center"><button type="submit">CREATE</button></div>
            </form>
        </div>
    </div>
</div>		
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <div>

    <form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required> <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required> <br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

    </div>


</body>
</html>
>>>>>>> 6ab4f5e754f5f978ab0d95506c43d91593156139
