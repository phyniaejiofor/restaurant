<?php
require_once("../private/initialize.php");
// check if request is a post request
 if (is_post_request()) {
  

  // collect form inputs
  $data = [];
  $data['name']= h($_POST['name']) ?? '';
  $data['email'] = h($_POST['email']) ?? '';
  $data['phone'] = h($_POST['phone']) ?? '';
  $data['date'] = h($_POST['date']) ?? '';
  $data['time'] = h($_POST['time']) ?? '';
  $data['people'] = h($_POST['people']) ?? '';
  $data['message'] = h($_POST['message']) ?? '';



  

  // validate user inputs
$errors = validateBookATableValues($data);



 if (empty($errors)) {
// submit data to database

// redirect back to home

redirect_to('./index.php');
 }



  



 }
 
 



require_once("includes/header.php");

require_once("home.php");
require_once("about.php");
require_once("menu.php");
require_once("special.php");
require_once("event.php");
require_once("gallary.php");
require_once("chef.php");
require_once("contact.php");
require_once("bookTable.php");


require_once("includes/footer.php");



?>





   
  
   
    
   
   
   
    
  