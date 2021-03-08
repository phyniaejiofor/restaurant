<?php

function is_post_request() {
	return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

function is_get_request() {
	return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

function h($string="") {
    return htmlspecialchars($string);
    }

function redirect_to($location){
    header('location:' . $location);
    }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
    }

function contact_input($contact) {
    $data = trim($contact);
    $data = stripslashes($contact);
    return $contact;
    }   
    
    function validate_contact($contact) {
        $contactError = [];
    
        if ($contact['name'] === "") {
            $contactError[] = "name is blank.";
        }
    
        if ($contact['email'] === "") {
            $contactError[] = "email required.";
        }
    
        if ($contact['subject'] === "") {
            $contactError[] = "subject is blank.";
        }
    
        if ($contact['message'] === "") {
            $contactError[] = "message is blank.";
        }
    
        return $contactError;
        
    }

    function display_err($contactError=array()) {
        $output = '';
        if(!empty($contactError)) {
            $output .= "<div class=\"bg-danger\">";
            $output .= "please fix the following errors:";
            $output .= "<ul>";
            foreach ($contactError as $errn) {
                # code...
                $output .= "<li>" . h($errn) . "</li>";
            }
            $output .= "</ul>";
            $output .= "</div>";
        }
        return $output;
        }    


function display_errors($errors=array()) {
    $output = '';
    if(!empty($errors)) {
        $output .= "<div class=\"bg-danger\">";
        $output .= "please fix the following errors:";
        $output .= "<ul>";
        foreach ($errors as $error) {
            # code...
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
        $errors[] = "name is blank.";
    }

    if ($data['email'] === "") {
        $errors[] = "email required.";
    }

    if ($data['phone'] === "") {
        $errors[] = "mobile number is blank.";
    }

    if ($data['time'] === "") {
        $errors[] = "time is required.";
    }

    if ($data['people'] === "") {
        $errors[] = "number of people required.";
    }

    if ($data['message'] === "") {
        $errors[] = "message is blank.";
    }


    return $errors;
    }







?>
