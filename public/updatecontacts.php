<?php
require_once("../private/initialize.php");

if(!isset($_GET['id'])){
  redirect_to('./contacts.php');
}

$id = $_GET['id'];



if(is_post_request()){
    

    $sql = "UPDATE contact SET ";
    $sql .= "WHERE id='" . $id . "'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $contact = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $contact;
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    if($result){
        redirect_to('./contacts.php');
  
      return true;
    }else{
      echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }

}
else{
// read the content of the database and prefill the form with the details

$contact = find_a_contact($id);



}


?>

<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-3">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">EDIT CONTACT</h4>
           


    <form action="<?php echo './updatecontacts.php?id=' . $contact['id'];?>" method="POST"   >
          <div class="form-row">
            <p>Name: <input type="text" value="<?php echo h($contact['name']) ?>"></p>
            <p>Email: <?php echo h($contact['email']) ?></p>
            <p>Phone: <?php echo h($contact['subject']) ?></p>
            <p>Message: <?php echo h($contact['message']) ?></p>
            <div class="validate"></div>
            </div>
         
            <form action="<?php echo './updatecontacts.php?id=' . $contact['id']?>" method="POST"   >
                <div class="form-row">
                  <div class="col-lg-4 col-md-6 form-group">
                      <?php echo h($contact['name']) ?>
                    <div class="validate"></div><br>
                  </div>                            
                <div class="text-center"><button type="submit">Update Contact</button></div>
            </form>
    </form>
    

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>

