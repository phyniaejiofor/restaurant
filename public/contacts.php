<?php require_once("../private/initialize.php"); ?>

<?php $contact_set = find_all_contacts(); ?>


<table class="list">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Subject</th>
                <th>Message</th>
                
            </tr> 

            <?php while($contact = mysqli_fetch_assoc($contact_set)) { ?>
                
                <tr>
                    <td><?php echo $contact['id']; ?></td>
                    <td><?php echo $contact['name']; ?></td>
                    <td><?php echo $contact['email']; ?></td>
                    <td><?php echo $contact['subject']; ?></td>    
                    <td><?php echo $contact['message']; ?></td>              
                </tr>
            <?php } ?>
        </table>

        <?php mysqli_free_result($contact_set); ?>