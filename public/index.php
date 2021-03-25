<?php
require_once("../private/initialize.php");
// check if request is a post request
 if (is_post_request()) {
  

  // collect form inputs
  $data['name'] = h(test_input($_POST['name']));
  $data['email'] = h(test_input($_POST['email']));
  $data['phone'] = h(test_input($_POST['phone'])) ?? '';
  $data['date'] = h(test_input($_POST['date'])) ?? '';
  $data['time'] = h(test_input($_POST['time'])) ?? '';
  $data['people'] = h(test_input($_POST['people'])) ?? '';
  $data['message'] = h(test_input($_POST['message'])) ?? '';



  // validate user inputs
  $errors = validateBookATableValues($data);
  


  if(empty($errors)) {
  // submit data to database
  $sql = "INSERT INTO book_a_table ";
	$sql .= "(name,email,phone,date,time,people,message)";
	$sql .= "VALUES (";
	$sql .= "'" . db_escape($db, $data['name']). "',";
	$sql .= "'" . db_escape($db, $data['email']). "',";
    $sql .= "'" . db_escape($db, $data['phone']). "',";
    $sql .= "'" . db_escape($db, $data['date']). "',";
    $sql .= "'" . db_escape($db, $data['time']). "',";
    $sql .= "'" . db_escape($db, $data['people']). "',";
    $sql .= "'" . db_escape($db, $data['message']). "'";
	$sql .= ")";

	$result = mysqli_query($db, $sql);
  confirm_result_set($result);

	if($result){
        // redirect back to home
        redirect_to('./index.php');
    }
	else{
		db_disconnect($db);
		exit;
    }

 

 
  }
  
}else{
    $errors=[];


   
    
    
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






   
  
   
    
   
   
   
    
  