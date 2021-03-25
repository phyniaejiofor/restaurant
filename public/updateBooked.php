<?php
require_once("../private/initialize.php");

if(!isset($_GET['id'])){
  redirect_to('./bookedTables.php');
}

$id = $_GET['id'];



if(is_post_request()){
    $status = h(test_input($_POST['status']));

    $sql = "UPDATE book_a_table SET ";
    $sql .= "is_ready='" . db_escape($db, $status). "'";
    $sql .= "WHERE id='" . $id ."'";
    $sql .= "LIMIT 1";
  
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
            <h4 class="text-success text-center">EDIT Booked Table</h4>
           


    <form action="<?php echo './updateBooked.php?id=' . $data['id'];?>" method="POST"   
          >
          <div class="form-row">
            <p>Name: <?php echo h($data['name']) ?></p>
            <p>Email: <?php echo h($data['email']) ?></p>
            <p>Phone: <?php echo h($data['phone']) ?></p>
            <p>Date: <?php echo h($data['date']) ?></p>
            <p>Time: <?php echo h($data['time']) ?></p>
            <p>Number of people: <?php echo h($data['people']) ?></p>
            <p>Message: <?php echo h($data['message']) ?></p>
            


          <div class="col-lg-4 col-md-6 form-group">
          <p>Status: <input type="text" class="form-control" name="status"  value="<?php echo h($data['is_ready']) ?>" required placeholder="status" data-rule="minlen:4"
                data-msg="Please enter at least 4 chars"></p>
              <div class="validate"></div>
            </div>
         
          <div class="text-center"><button type="submit">Update Status</button></div>
        </form>
    

  </div>	</div>	</div>	</div>	</div>	</div>	</div>
<br><br>

