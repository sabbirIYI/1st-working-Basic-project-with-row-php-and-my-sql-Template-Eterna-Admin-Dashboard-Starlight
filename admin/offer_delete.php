<?php
    session_start();
    require_once 'inc/db.php';
    $id = $_GET['id'];

    $delete_query = "DELETE FROM price WHERE id = '$id'";
    mysqli_query(connect_database(), $delete_query);
    
    $_SESSION ['offer_deleted'] = "Offer Deleted Successfully";
    header('location: edit_price.php');
?>