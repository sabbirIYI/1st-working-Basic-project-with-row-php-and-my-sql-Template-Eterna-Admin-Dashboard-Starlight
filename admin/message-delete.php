<?php
    include 'inc/db.php';
    $id = $_GET['id'];

    $delete_query = "DELETE FROM messages WHERE id = $id";
    mysqli_query(connect_database(), $delete_query);
    
    $_SESSION['message_delete'] = "Message Deleted Successfully";

    header('location: message.php');

?>