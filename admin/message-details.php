<?php
    require_once 'inc/d_header.php';
    require_once 'inc/db.php';
    $id = ($_GET['id']);
    $select_query = "SELECT * FROM messages WHERE id = '$id'";
    $_single_message = mysqli_fetch_assoc(mysqli_query(connect_database(), $select_query)); 
?>

    <div class="card">
        <div class="card-header">
            <h4 data-aos="fade-up" class="text-center">Message Details</h4>
        </div>
        <div class="card-body">
                <p><strong>Name:  &nbsp;  &nbsp; </strong><?= ucfirst($_single_message['name']);?></p>
                <p><strong>Subject:  &nbsp;  &nbsp; </strong>  <?= ucfirst($_single_message['subject']);?></p>
                <p><strong>Email:  &nbsp;  &nbsp; </strong>  <?= $_single_message['email']?></p>
                <p><strong>Message:  &nbsp;  &nbsp; </strong>  <?= $_single_message['message']?></p>
                <a href="message.php" class="btn btn-info">Go To Messages</a>
            </div>
    </div>

     
<?php
    require_once 'inc/d_footer.php';
?>
<?php

$update_query = "UPDATE messages SET Status = 'read' WHERE id = $id";
mysqli_query(connect_database(), $update_query);
?>