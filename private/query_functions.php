
<?php

function find_all_bookedtables() {
    global $db;

    $sql = "SELECT * FROM book_a_table";
    $sql .= " ORDER BY ID ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}


function find_all_contacts() {
    global $db;

    $sql = "SELECT * FROM contact";
    $sql .= " ORDER BY ID ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_a_contact($id) {
    global $db; 

    $sql = "SELECT * FROM contact ";
    $sql .= "WHERE id='" . $id . "'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $contact = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $contact;
}


function  find_a_booked_table($id){

    global $db;
    
    $sql = "SELECT * FROM book_a_table ";
    $sql .= "WHERE id='". db_escape($db, $id)."'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $data=mysqli_fetch_assoc($result);
      mysqli_free_result($result);
      return $data;
}

// function update_contact($contact) {
//     global $db;

//     $sql = "UPDATE contact SET ";
//         $sql .= "menu_name='" . $contact['name'] . "', ";
//         $sql .= "position='" . $contact['email'] . "', ";
//         $sql .= "position='" . $contact['subject'] . "', ";
//         $sql .= "visible='" . $contact['message'] . "' ";
//         $sql .= "WHERE id='" . $contact['id'] . "' ";
//         $sql .= "LIMIT 1";

//         $result = mysqli_query($db, $sql);
//         // For UPDATE statements, $result is true/false
//             if($result) {
//                 return true;
//             } else {
//                 // UPDATE failed
//                 echo mysqli_error($db);
//                 db_diconnect($db);
//                 exit;
//             }
// }

function validate_admin($admin) {
    $errors = [];

    // admin_name
    if(is_blank($admin['name'])) {
      $errors[] = "Name cannot be blank.";
    } elseif(!has_length($admin['name'], ['min' => 2, 'max' => 255])) {
      $errors[] = "Name must be between 2 and 255 characters.";
    }
    elseif (!has_unique_name($admin['email'], $admin['id'] ?? 0)) {
      $errors[] = "email not allowed. Try another.";
    }

    if(is_blank($admin['email'])) {
      $errors[] = "Email cannot be blank.";
    } 
     elseif (!has_valid_email_format($admin['email'])) {
      $errors[] = "Email must be a valid format.";
    }

    
      if(is_blank($admin['password'])) {
        $errors[] = "Password cannot be blank.";
      } elseif (!has_length($admin['password'], array('min' => 4))) {
        $errors[] = "Password must contain  or more characters";
      } elseif (!preg_match('/[A-Z]/', $admin['password'])) {
        $errors[] = "Password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $admin['password'])) {
        $errors[] = "Password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $admin['password'])) {
        $errors[] = "Password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $admin['password'])) {
        $errors[] = "Password must contain at least 1 symbol";
      }

      if(is_blank($admin['confirm_password'])) {
        $errors[] = "Confirm password cannot be blank.";
      } elseif ($admin['password'] !== $admin['confirm_password']) {
        $errors[] = "Password and confirm password must match.";
      }
    
    return $errors;
}








function insert_admin($admin) {
    global $db;


    $errows = validate_admin($admin);
    if(!empty($errows)){
      return $errows;
    }
  
    $hashed_password = password_hash($admin['password'], PASSWORD_BCRYPT);


    $sql = "INSERT INTO sign_up ";
    $sql .= "(name, email, password) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $admin['name']) . "',";
    $sql .= "'" . db_escape($db, $admin['email']) . "',";
    $sql .= "'" . db_escape($db, $hashed_password) . "'"; 
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    if($result) {
        return true;
    } else {
        // INSERT failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

   


?>