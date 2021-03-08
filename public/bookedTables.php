<?php require_once("../private/initialize.php"); ?>

<?php

$data_set = find_all_bookedtables();



?>

<table class="list">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>People</th>
                <th>Message</th>
                
            </tr> 

            <?php while($data = mysqli_fetch_assoc($data_set)) { ?>
                
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td><?php echo $data['date']; ?></td>
                    <td><?php echo $data['time']; ?></td>
                    <td><?php echo $data['people']; ?></td>
                    <td><?php echo $data['message']; ?></td>
                    
                </tr>
            <?php } ?>
        </table>

        <?php mysqli_free_result($data_set); ?>