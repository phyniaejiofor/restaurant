<?php
require_once("../private/initialize.php");

if(!isset($_GET['id'])){
  redirect_to('./bookedTables.php');
}

$id = $_GET['id'];



if(is_post_request()){
   

    $sql = "DELETE FROM book_a_table ";
    $sql .= "WHERE id='" . db_escape($db,$id) ."'";
     $sql .= "LIMIT 1";
     $result = mysqli_query($db, $sql);
  
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    if($result){
        redirect_to('./bookedTables.php');
  
      return true;
    }else{
      echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
          

}
else{
// read the content of the database and prefill the form with the details

$data = find_a_booked_table($id);

}


?>

<div class="container-fluid">
    <div class="row "> 
        <div class="col-md-7 col-lg-6 col-sm-3">
				<div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center">Are you sure you want to delete this record?</h4>
           


    <form action="<?php echo './deleteBooked.php?id=' . $data['id']?>" method="POST"   
          >
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
                <?php echo h($data['name']) ?>
              <div class="validate"></div><br>
            </div>
         


         
           
         
          <div class="text-center"><button type="submit">Delete</button></div>
        </form>
    

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>
