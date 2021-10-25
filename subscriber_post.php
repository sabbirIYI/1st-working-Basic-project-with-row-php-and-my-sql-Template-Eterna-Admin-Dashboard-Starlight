<?php
require_once 'admin/inc/db.php';
    $email = $_POST['email'];

    $insert_query = "INSERT INTO subscriber (email) VALUES ('$email')";
    mysqli_query(connect_database(),  $insert_query);

    $_SESSION['thanks'] = "Thanks You For Subscribe";
    header('location: index.php')
?>