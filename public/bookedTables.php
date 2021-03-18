<?php require_once("../private/initialize.php"); ?>

<?php

$data_set = find_all_bookedtables();



?>

<style>
    th {
        background: #0c0b09;
        color: whitesmoke;
    }
    td {
        background: #0c0b09;
        color: #cda45e;
    }
    td, th {
        border: 1px solid #999;
        padding: 40px;
    }
    table {
        border-spacing: 0.5rem;
        border-collapse: collapse;
    }
</style>


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
                <th>Status</th>
                <th></th>
                <th></th>
               
                
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
                    <td><?php echo $data['is_ready'] ? "true" : "false"; ?></td>
                    <td><a class="btn-primary" href="<?php echo './updateBooked.php?id=' . $data['id']?>">CLICK TO EDIT</a></td>
                    <td><a class="btn-primary" href="<?php echo './deleteBooked.php?id=' . $data['id']?>">CLICK TO DELETE</a></td>

                   
                </tr>
            <?php } ?>
        </table>
        <?php mysqli_free_result($data_set); ?>