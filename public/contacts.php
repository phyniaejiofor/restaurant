<?php require_once("../private/initialize.php"); ?>

<?php $contact_set = find_all_contacts(); ?>

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
                    <td><a class="btn-primary" href="<?php echo './updatecontacts.php?id=' . $contact['id']?>">CLICK TO EDIT</a></td> 
                    <td><a class="btn-primary" href="<?php echo './deletecontacts.php?id=' . $contact['id']?>">DELETE CONTACT</a></td>
           
                </tr>
            <?php } ?>
        </table>

        <?php mysqli_free_result($contact_set); ?>