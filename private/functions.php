<?php
function h($string=""){
	return htmlspecialchars($string);
    }

    function redirect_to($location){
        header('location:' . $location);
        }
function is_post_request(){
	return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    
function is_get_request(){
	return $_SERVER['REQUEST_METHOD'] == 'GET';
    }



    function display_errors($errors=array()) {
        $output = '';
        if(!empty($errors)) {
          $output .= "<div class=\"bg-danger\">";
          $output .= "Please fix the following errors:";
          $output .= "<ul>";
          foreach($errors as $error) {
            $output .= "<li>" . h($error) . "</li>";
          }
          $output .= "</ul>";
          $output .= "</div>";
        }
        return $output;
        }



 function validateBookATableValues($data){
    $errors = [];

    if ($data['name'] === "") {
      $errors[] = "Name cannot be blank.";
    }
    
    if ($data['email'] === "") {
      $errors[] = "email cannot be blank.";
     }
    
    
     if ($data['phone'] === "") {
      $errors[] = "phone cannot be blank.";
     }
    
    
     if ($data['date'] === "") {
      $errors[] = "date cannot be blank.";
     }
    
    
     if ($data['time'] === "") {
      $errors[] = "time cannot be blank.";
     }
    
     if ($data['people'] === "") {
      $errors[] = "people cannot be blank.";
     }
    
     if ($data['message'] === "") {
      $errors[] = "message cannot be blank.";
     }


     return $errors;
    
 }       

?>


