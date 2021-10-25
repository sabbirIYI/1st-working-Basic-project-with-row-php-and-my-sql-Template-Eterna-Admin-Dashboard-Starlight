<?php

include 'inc/db.php'; 
   foreach ($_POST['check'] as $key => $ean) {
    $delete_query = "DELETE FROM messages WHERE id = $key";
    mysqli_query(connect_database(), $delete_query);
   }

   header('location:message.php');
?>