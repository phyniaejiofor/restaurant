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
