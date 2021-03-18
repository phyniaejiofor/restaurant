<!-- <?php
// require_once("../private/initialize.php");

// if(!isset($_GET['id'])){
//   redirect_to('./bookedTables.php');
// }

// $id = $_GET['id'];



// if(is_post_request()){

//     $sql = "UPDATE contact SET ";
//     $sql .= "is_ready='" . db_escape($db, $id). "'";
//     $sql .= "WHERE id='" . $id ."'";
//     $sql .= "LIMIT 1";
  
//     $result = mysqli_query($db, $sql);
//     confirm_result_set($result);
//     if($result){
//         redirect_to('./contacts.php');
  
//       return true;
//     }else{
//       echo mysqli_error($db);
//         db_disconnect($db);
//         exit;
//     }

// }
// else{
// // read the content of the database and prefill the form with the details

// $contact = find_contact_by_id($id);



}


?>

<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-3">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">EDIT Booked Table</h4>
           
            <form action="contact.php" method="POST"  class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" value="<?php //echo h($contact['name']) ?>" placeholder="Your Name"
                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                  <div class="valimessage"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" value="<?php //echo h($contact['email']) ?>" placeholder="Your Email"
                    data-rule="email" data-msg="Please enter a valid email" required />
                  <div class="valimessage"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" value="<?php //echo h($contact['subject']) ?>" placeholder="Subject"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                <div class="valimessage"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="8" data-rule="required"
                  data-msg="Message" value="<?php// echo h($contact['message']) ?>" placeholder="Message" required ></textarea>
                <div class="valimessage"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div><?php //echo display_err($contactError); ?></div>
                 <div class="sent-message">Your message has been sent. Thank you!</div> 
              </div> -->
              <!-- <div class="text-center"><button type="submit">Update Contact</button></div>
            </form>


    

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br> -->
 
